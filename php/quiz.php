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
    
    //This if statement checks if quiz has been finnsihed or not
    if(!isSet($_POST['submit'])) {  
      //If not, then it displays quiz form
      echo "<form action='./quiz.php' method='post'> ";
      foreach ($random_numbers as $number => $number_of_question) {
          echo "<section class='questionStyle'>";
          echo $questions[$number_of_question];
          echo "</section>";
      }
        echo "<input type='submit' name='submit' value='Sprawdź' class='submitButton'></form>";
    } else { //If yes, then it displays score, congratulations message and questions that weren't answered correctly
      $num_of_answers = 0; //Amount of correct answers
      $wrong_answers = ""; //String, in which all wrongly answered questions are stored
      
      //This loop checks answer for every single question. If it's incorrect, then question is added to the $wrong_answers string, which is displayed after the end of the quiz
      foreach ($_POST['question'] as $question_key => $question_answer) {
        if ($question_answer == 1) {
          $num_of_answers++;
        } elseif($question_answer != 1) {
          $wrong_answers = $wrong_answers."<section class='questionStyle'>".$questions[$question_key-1]."<p class='correctAnswer'>Twoja odpowiedź: ".$question_answer."</p></section>";
        }   
      }
        
      $num_of_answers = (int)(($num_of_answers * 100) / NUM_OF_QUESTIONS); //Calculating the score
      echo "<section class='mainContainer'>";
      echo "<p class='score'>".$num_of_answers."%</p>";
        
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