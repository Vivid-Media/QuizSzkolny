<?php
  /*
  This piece of code declares an array which is later shuffled and sliced, so it can be used to choose NUM_OF_QUESTIONS amount of random questions from questions.php file to display. 
  */
  const NUM_OF_QUESTIONS = 30; // const defining how many questions are supossed to be displayed
  $random_numbers = range(0, 69);
  shuffle($random_numbers);
  $random_numbers = array_slice($random_numbers ,0, NUM_OF_QUESTIONS);
?>