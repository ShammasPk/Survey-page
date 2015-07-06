<?php
// Set the database information
$hostname = "localhost";
$username = "root";
$password = "admin";
$dbname = "survey";

//Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);

if (mysqli_connect_error())
{
	echo "Could not connect, Please try again";
	exit();
}


//questionte baaaagam:




//Create query to get all questions
$query = "SELECT * FROM questions";
//Run the query
$query_results = $conn->query($query);
//Count the number of returned items from the database
$num_questions_returned = $query_result->num_rows;

//any case no questions in the database
if ($num_questions_returned < 1)
{
    echo "There is no question in the database";
    exit();
}


// an array to the questions
$questionsArray = array();

//Add all the questions from the result to the questions array(associatieve array)
while ($row = $query_result->fetch_assoc())
{
    $questionsArray[] = $row;
}

//Create an array of Correct answers
$correctAnswerArray = array();

foreach($questionsArray as  $question)
{
    $correctAnswerArray[$question['questionid']] = $question['answer'];
}
//Build the questions array from query result
$questions = array();
foreach($questionsArray as $question)
{
    $questions[$question['questionid']] = $question['name'];
 }

//Build the options array from query result
$choices = array();
foreach ($questionsArray as $row)
{
    $choices[$row['questionid']] = array($row['opt1'], $row['opt2'], $row['opt3'], $row['answer']);
}



?>