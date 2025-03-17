<?php
  /*
  This piece of code declares an array which is later shuffled and sliced, so it can be used to choose NUM_OF_QUESTIONS amount of random questions from questions.php file to display. 
  */
  const NUM_OF_QUESTIONS = 10; // const defining how many questions are supossed to be displayed
  $random_numbers = range(1, 40);
  shuffle($random_numbers);
  $random_numbers = array_slice($random_numbers ,0, NUM_OF_QUESTIONS);
?>