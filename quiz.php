<?php

//Connect to Db and fetch questions
require_once('sdb_conn.php');

//Create a query to fetch all the questions
$query = "select * from questions";

//Run the query
$query_result = $sdb->query($query);

//Count the number of returned items from the database
$num_questions_returned = $query_result->num_rows;

if ($num_questions_returned < 1){
    echo "There is no question in the database";
    exit();}

//Create an array to hold all the returned questions
$questionsArray = array();

//Add all the questions from the result to the questions array
while ($row = $query_result->fetch_assoc()){
    $questionsArray[] = $row;
}

//Create an array of Correct answers
$correctAnswerArray = array();
foreach($questionsArray as  $question){
    $correctAnswerArray[$question['id']] = $question['answer'];
}


//Build the questions array from query result
$questions = array();
foreach($questionsArray as $question) {
    $questions[$question['id']] = $question['name'];
 }

//Build the choices array from query result
$choices = array();
foreach ($questionsArray as $row) {
    $choices[$row['id']] = array($row['opt1'], $row['opt2'], $row['opt3'], $row['answer']);
  }















