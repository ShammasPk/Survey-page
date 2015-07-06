<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);
$rightAnswer = 0;
$wrongAnswer = 0;

//require_once('header.html');
require_once('functions_list.php');
require_once('quiz.php');


if (isset($_POST['submit'])){
  foreach($_POST['response'] as $key => $value){
      if($correctAnswerArray[$key] == $value){
          $rightAnswer++;
      } else {
          $wrongAnswer++;
      }
  }
  if ($rightAnswer > 0)
  {
  	echo $rightAnswer;
  }
  if ($wrongAnswer > 0)
  {
  	echo $wrongAnswer;
  }
}
?>