<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
  // Header only being displayed when quiz hasn't been submited yet
  if(!isSet($_POST['submit'])) {
    echo "<header><h2>Powodzenia!</h2></header>";
  } 
?>
<main>

<?php
  include './questions.php';
  include_once './randNumbers.php';

    ini_set('display_errors', 0); // Prevents potential errors from displaying
    
      //polaczenie z bazą
      $conn = new mysqli("localhost", "root", null, "quiz");

      // zapytanie sql - pobiera wszystkie pytania z tabeli questions
      $sql = "SELECT q.id, q.question, a.answer_a, a.answer_b, a.answer_c, a.answer_d, a.correct_answer 
        FROM questions q 
        JOIN answers a ON q.id = a.question_id";
      $result = $conn->query($sql);
      $questions = array();  //inicjalizacja tablicy

      if ($result) {
        while($row = $result->fetch_assoc()) {
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
      //jesli nie wyswietl formularz
      echo "<form action='./quiz.php' method='post'>";
      
      //display questions
      foreach ($questions as $question_id => $question_data) {
        echo "<section class='questionStyle'> <p> $question_id - " . $question_data['question_text'] . "</p>";
        foreach ($question_data['answers'] as $key => $answer_text) {
            echo "<label><input type='radio' name='question[$question_id]' value='$key'> $key. $answer_text</label>";
        }
        echo "</section>";
    }
        echo "<input type='submit' name='submit' value='Sprawdź' class='submitButton'></form>";
    } else { //If yes, then it displays score, congratulations message and questions that weren't answered correctly
      $num_of_answers = 0; //Amount of correct answers
      $wrong_answers = ""; //String, in which all wrongly answered questions are stored
      

      $conn = new mysqli("localhost", "root", null, "quiz");
      $sql = "SELECT q.id, a.correct_answer 
      FROM questions q 
      JOIN answers a ON q.id = a.question_id";
      $result = $conn->query($sql);
      $correct_answers = array();
      
      if ($result) {
      while ($row = $result->fetch_assoc()) {
        $correct_answers[$row['id']] = $row['correct_answer'];
      }
    }
    $conn->close();
    


      //This loop checks answer for every single question. If it's incorrect, then question is added to the $wrong_answers string, which is displayed after the end of the quiz
     if (isset($_POST['question'])) {
      foreach ($_POST['question'] as $question_id => $question_answer) {
        if ($question_answer == $correct_answers[$question_id]) {
          $num_of_answers++;
        } 
        else{
          if (isset($questions[$question_id])) {
            $wrong_answers .= "<section class='questionStyle'>";
            $wrong_answers .= "<p>" . $questions[$question_id]['question_text'] . "</p>";

            foreach ($questions[$question_id]['answers'] as $key => $answer_text) {
                $checked = ($key == $question_answer) ? "checked" : "";
                $wrong_answers .= "<label><input type='radio' name='question[$question_id]' value='$key' $checked> $key. $answer_text</label>";
            }

            $correct_answer_letter = $correct_answers[$question_id];
            $wrong_answers .= "<p class='correctAnswer'>Poprawna odpowiedź: " . $questions[$question_id]['answers'][$correct_answer_letter] . "</p>";

            $wrong_answers .= "</section>";
        } else {
            $wrong_answers .= "<p>Błąd: Nie znaleziono pytania o ID $question_id.</p>";
        }
    }   
  }
}
else{
  $wrong_answers .= "<p>Błąd: Brak danych z formularza.</p>";
}   
      // Calculate score percentage
      $total_questions = count($questions);
      $score_percentage = ($num_of_answers / $total_questions) * 100;

      // Insert user score into the database
      $conn = new mysqli("localhost", "root", "", "quiz");

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      // Assuming user_id is stored in session or passed as a hidden input
      $user_id = $_SESSION['user_id'] ?? 1; // Replace with actual user ID retrieval logic

      // Prepare and bind
      $stmt = $conn->prepare("INSERT INTO results (user_id, userScore) VALUES (?, ?)");
      $stmt->bind_param("ii", $user_id, $score_percentage);

      // Execute the statement
      if (!$stmt->execute()) {
          echo "Błąd podczas zapisywania wyniku: " . $stmt->error;
      }

      // Close the statement and connection
      $stmt->close();
      $conn->close();

      echo "<section class='mainContainer'>";
      echo "<p class='score'>" . (round($score_percentage)) ."%</p>";
        
      if($num_of_answers <= 30) { //Displaying appropriate congraatulations message
        echo "<p class='scoreText'>Niestety, ale nie poszło ci zbyt dobrze. Musisz się jeszcze dużo nauczyć, jeśli planujesz podjąć się pracy programisty.</p>";
      } elseif($num_of_answers > 30 && $num_of_answers <= 60) {
        echo "<p class='scoreText'>Nieźle, jednak czeka cię jeszcze sporo pracy jeśli chcesz opanować podstawy projektowania stron internetowych.</p>";
      } elseif($num_of_answers > 60 && $num_of_answers <= 90) {
        echo "<p class='scoreText'>Świetnie ci poszło! Jeśli znasz praktykę równie dobrze jak teorię, nie musisz się zbytnio martwić o egzaminy zawodowe.</p>";
      } elseif($num_of_answers > 90 && $num_of_answers <= 100) {
        echo "<p class='scoreText'>Gratulacje! Poszło ci praktycznie bezbłędnie. Znaczy to, że teorię masz w zasadzie w małym palcu. Brawo i oby tak dalej!</p>";
      }

      

      //Displaying all the incorrect answers. Of course if there were any
      if($wrong_answers != "") { 
        echo "<p class='scoreText'>Popełniłeś błąd w następujących pytaniach:</p>";
        echo $wrong_answers;
      }
        
      //Displaying a button taking user back to index.html
      echo "<a href='../index.html' class='submitButton'>Wróć do strony początkowej</a>";
      echo"</section>";
    }
?>
</main>
<footer>
    <p class="footerLeft">
      Copyright© 2024
      <a href="https://cksulechow.pl/" target="_blank">CKZiU Sulechow</a>
    </p>
    <span class="footerRight">Szymon Urbański 2TA</span>
  </footer>
</body>
</html>