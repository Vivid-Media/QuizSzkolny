<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
    @media (max-width: 447px) {
      header {
        height: 10%;
      }

      footer {
        height: 10%;
      }
    }
  </style>
</head>

<body>
  <?php
  // Header only being displayed when quiz hasn't been submited yet
  if (!isset($_POST['submit'])) {
    echo "<header><h2>Powodzenia!</h2></header>";
  }
  ?>
  <main>

    <?php
    include './questions.php';
    include_once './randNumbers.php';

    ini_set('display_errors', 0); // Prevents potential errors from displaying

    //polaczenie z bazą
    $conn = new mysqli("localhost","root",null,"quiz");
            
            if ($conn->connect_error) {
              die("Błąd połączenia z bazą danych: " . $conn->connect_error);
            }
            $conn->query("SET NAMES 'utf8mb4'");
            $conn->query("SET CHARACTER SET utf8mb4");
            $conn->query("SET COLLATION_CONNECTION = 'utf8mb4_unicode_ci'");


    // zapytanie sql - pobiera wszystkie pytania z tabeli questions
    $sql = "SELECT q.id, q.question, a.answer_a, a.answer_b, a.answer_c, a.answer_d, a.correct_answer 
        FROM questions q 
        JOIN answers a ON q.id = a.question_id";
    $result = $conn->query($sql);
    $questions = array();  //inicjalizacja tablicy

    if ($result) {
      while ($row = $result->fetch_assoc()) {
        $question_id = $row['id'];
        $question_text = $row['question'];
        $answers = [
          'A' => $row['answer_a'],
          'B' => $row['answer_b'],
          'C' => $row['answer_c'],
          'D' => $row['answer_d']
        ];
        $correct_answer = $row['correct_answer'];

        // Wypełnij tablicę $questions
        $questions[$question_id] = [
          'question_text' => $question_text,
          'answers' => $answers,
          'correct_answer' => $correct_answer
        ];
      }
    }
    $conn->close();
   // sprawdz czy quiz skończony
if (!isset($_POST['submit'])) {
  // Wyświetl formularz
  echo "<form action='./quiz.php' method='post'>";

  foreach ($random_numbers as $number_of_question) {
      echo "<section class='questionStyle'> <p>" . $questions[$number_of_question]["question_text"] . "</p>";
      foreach ($questions[$number_of_question]['answers'] as $key => $answer_text) {
          echo "<label><input type='radio' name='question[$number_of_question]' value='$key'> $key. $answer_text</label>";
      }
      echo "</section>";
  }
  echo "<input type='submit' name='submit' value='Sprawdź' class='submitButton'></form>";
} else {
  $num_of_answers = 0; // Liczba prawidłowych odpowiedzi
  $wrong_answers = ""; // Złe odpowiedzi

  // Połączenie z bazą danych - ponowne
  $conn = new mysqli("localhost", "root", null,"quiz");
  $conn->set_charset('utf8mb4');

  if ($conn->connect_error) {
      die("Błąd połączenia z bazą danych: " . $conn->connect_error);
  }

  // Pobieranie poprawnych odpowiedzi
  $sql = "SELECT q.id, a.correct_answer 
          FROM questions q 
          JOIN answers a ON q.id = a.question_id";
  $result = $conn->query($sql);

  if (!$result) {
      die("Błąd w zapytaniu SQL: " . $conn->error);
  }

  $correct_answers = [];
  while ($row = $result->fetch_assoc()) {
      $correct_answers[$row['id']] = $row['correct_answer'];
  }

  // Sprawdzenie odpowiedzi użytkownika
  if (isset($_POST['question'])) {
      foreach ($_POST['question'] as $question_id => $question_answer) {
          if (isset($correct_answers[$question_id]) && $question_answer == $correct_answers[$question_id]) {
              $num_of_answers++;
          } else {
              $wrong_answers .= "<section class='questionStyle'>";
              $wrong_answers .= "<p>" . $questions[$question_id]['question_text'] . "</p>";

              foreach ($questions[$question_id]['answers'] as $key => $answer_text) {
                  $checked = ($key == $question_answer) ? "checked" : "";
                  $wrong_answers .= "<label><input type='radio' name='question[$question_id]' value='$key' $checked> $key. $answer_text</label>";
              }

              $correct_answer_letter = $correct_answers[$question_id];
              $wrong_answers .= "<p class='correctAnswer'>Poprawna odpowiedź: " . $questions[$question_id]['answers'][$correct_answer_letter] . "</p>";
              $wrong_answers .= "</section>";
          }
      }
  } else {
      echo "<p>Błąd: Brak danych z formularza!</p>";
  }

  // Wylicz procenty
  $score_percentage = ($num_of_answers / NUM_OF_QUESTIONS) * 100;

  // Pobranie ID użytkownika z sesji
  $user_id = $_SESSION['user_id'] ?? 1;

  // Zapis wyniku do bazy danych
  $stmt = $conn->prepare("INSERT INTO results (user_id, userScore) VALUES (?, ?)");
  $stmt->bind_param("ii", $user_id, $score_percentage);

  if (!$stmt->execute()) {
      echo "Błąd podczas zapisywania wyniku: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();

  // Zakończenie sesji po zapisaniu wyniku
  session_unset();
  session_destroy();

  // Wyświetlenie wyniku
  echo "<section class='mainContainer'>";
  echo "<p class='score'>" . round($score_percentage) . "%</p>";

  if ($score_percentage <= 30) {
      echo "<p class='scoreText'>Niestety, ale nie poszło ci zbyt dobrze. Musisz się jeszcze dużo nauczyć, jeśli planujesz podjąć się pracy programisty.</p>";
  } elseif ($score_percentage <= 60) {
      echo "<p class='scoreText'>Nieźle, jednak czeka cię jeszcze sporo pracy jeśli chcesz opanować podstawy projektowania stron internetowych.</p>";
  } elseif ($score_percentage <= 90) {
      echo "<p class='scoreText'>Świetnie ci poszło! Jeśli znasz praktykę równie dobrze jak teorię, nie musisz się zbytnio martwić o egzaminy zawodowe.</p>";
  } else {
      echo "<p class='scoreText'>Gratulacje! Poszło ci praktycznie bezbłędnie. Znaczy to, że teorię masz w zasadzie w małym palcu. Brawo i oby tak dalej!</p>";
  }

  // Wyświetlenie błędnych odpowiedzi
  if ($wrong_answers != "") {
      echo "<p class='scoreText'>Popełniłeś błąd w następujących pytaniach:</p>";
      echo $wrong_answers;
  }

  // Przycisk powrotu
  echo "<div class='buttonContainer'><a href='../index.html' class='submitTwoButton'>Powrót</a></div>";
  echo "</section>";
}
    ?>
  </main>

  <footer>
    <p class="footerLeft">
      Copyright© 2024
      <a href="https://cksulechow.pl/" target="_blank">CKZiU Sulechow</a>
      <br> &copy; Vivid Media 2025
    </p>
  </footer>
</body>

</html>