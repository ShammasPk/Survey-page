<?php

require_once('Database.php');


	$db= new Database('localhost','root','admin','survey');
	// $db->insert();
	$table_name="questions";
	$fields=array("name","email","phone");


$name = '';
$email = '';
$phone ='';

	if (isset($_POST['Register']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
	}
$values=array($name, $email, $phone);
$db->insert('user', $fields, $values);


/*
	$fields=array("");
	$where=array("id","1");
	$result=$db->select($table_name,$fields,$where);
	//var_dump($result);*/

// $x = 0;
// $score = 0;

// for ($i=0; $i<=19; $i++)
// {
//     $fullAnswer = $row[$_POST['a'.$x]] ;
//     // Find the question id
//     $questionId = filter_var($fullAnswer, FILTER_SANITIZE_NUMBER_INT);

//     // Find the answer
//     $answer = substr($fullAnswer, 0, 1);

//     // get the question for the answer of current iteration
//     $result = mysql_query("SELECT * FROM `questions` WHERE id=$questionId LIMIT 1;");
//     $question = mysql_fetch_assoc($result);

//     echo $question['q_do'] . '<br />';

//     $correct = $question['corr_ans'] ; 
//   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>psyservey</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/exam.css">
	<script type="text/javascript" src="./js/jquery.min.js" ></script>
	<script type="text/javascript">
	$(document).ready(function(){
		// pop up window open
		$(".regbt").click(function(){

			$(".popup").css('display', 'block');

		});
		// pop up window close
		$(".closebt").click(function(){

			$(".popup").css('display', 'none');

		});


	});
	</script>
	
</head>
<body>

	<div class="header">
		<div class="hedmain">
	<div class="reg">
		<li class="regmode">Hii USER</li>
	</div>
	<div class="navg">	
				<ul >
					<li>HOME</li>
					<li>FEATURES</li>
					<li><a href="#contact">CONTACT US</a></li>
				</ul></div>
	<div class="logo">
		<img src="image/logo.png" alt="" class="logo">
	</div>
		</div>
	</div>
	<div class="content">

	<div class="main">
		<h1>welcome to psybo test</h1>

		<form action="result.php">
		<?php /*$question = mysql_query("SELECT * FROM `questions` ORDER BY RAND() LIMIT 10;"); // 20 questions in my databas 
		$x = 0;
		while ($row = mysql_fetch_array($question))
		{ */  
		?>
		<ul>
			<li >
			
				<h3>1.</h3>
				<table align="center" width="90%" cellpadding="5" cellspacing="5" border="0"> <tr>
					<td><label><input type="radio" name="ab"> asp bhg</label>	</td>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>

				</tr>
				<tr>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>

				</tr>
				</table>
			</li>
			<li >
				<h3>1. whtak jkahsiu jhgfdskjhjofds iojgm,hvg oigf jhf goihlkjlkjfdioug   f bfiu hfkjhjfopdf knmlkf jdfuhfdnjd?gauyh oijlk;j;pliaopjk;l  jakj 		kjaanl;ajhkjab  jkibaikjhgjan</h3>
				<table align="center" width="90%" cellpadding="5" cellspacing="5" border="0"> <tr>
					<td><input type="radio" name="ab2">	<label>asp bhg</label>	</td>
					<td><input type="radio" name="ab2">	<label>asp bhg</label>	</td>

				</tr>
				<tr>
					<td><input type="radio" name="ab2">	<label>asp bhg</label>	</td>
					<td><input type="radio" name="ab2">	<label>asp bhg</label>	</td>

				</tr>

				</table>
			</li>
			<li >
				<h3>1. whtak jkahsiu jhgfdskjhjofds iojgm,hvg oigf jhf goihlkjlkjfdioug   f bfiu hfkjhjfopdf knmlkf jdfuhfdnjd?gauyh oijlk;j;pliaopjk;l  jakj 		kjaanl;ajhkjab  jkibaikjhgjan</h3>
				<table align="center" width="90%" cellpadding="5" cellspacing="5" border="0"> <tr>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>

				</tr>
				<tr>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>

				</tr>
				</table>
			</li>
			<li >
				<h3>1. whtak jkahsiu jhgfdskjhjofds iojgm,hvg oigf jhf goihlkjlkjfdioug   f bfiu hfkjhjfopdf knmlkf jdfuhfdnjd?gauyh oijlk;j;pliaopjk;l  jakj 		kjaanl;ajhkjab  jkibaikjhgjan</h3>
				<table align="center" width="90%" cellpadding="5" cellspacing="5" border="0"> <tr>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>

				</tr>
				<tr>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>

				</tr>
				</table>
			</li>
			<li >
				<h3>1. whtak jkahsiu jhgfdskjhjofds iojgm,hvg oigf jhf goihlkjlkjfdioug   f bfiu hfkjhjfopdf knmlkf jdfuhfdnjd?gauyh oijlk;j;pliaopjk;l  jakj 		kjaanl;ajhkjab  jkibaikjhgjan</h3>
				<table align="center" width="90%" cellpadding="5" cellspacing="5" border="0"> <tr>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>

				</tr>
				<tr>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>

				</tr>
				</table>
			</li>
			<li >
				<h3>111. whtak jkahsiu jhgfdskjhjofds iojgm,hvg oigf jhf goihlkjlkjfdioug   f bfiu hfkjhjfopdf knmlkf jdfuhfdnjd?gauyh oijlk;j;pliaopjk;l  jakj 		kjaanl;ajhkjab  jkibaikjhgjan</h3>
				<table align="center" width="90%" cellpadding="5" cellspacing="5" border="0"> <tr>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>

				</tr>
				<tr>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>

				</tr>
				</table>
			</li>
			<li >
				<h3>1234324324. whtak jkahsiu jhgfdskjhjofds iojgm,hvg oigf jhf goihlkjlkjfdioug   f bfiu hfkjhjfopdf knmlkf jdfuhfdnjd?gauyh oijlk;j;pliaopjk;l  jakj 		kjaanl;ajhkjab  jkibaikjhgjan</h3>
				<table align="center" width="90%" cellpadding="5" cellspacing="5" border="0"> <tr>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>

				</tr>
				<tr>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>
					<td><input type="radio" name="ab">	<label>asp bhg</label>	</td>

				</tr>
				</table>
			</li>
			<li style="list-style:none;"><input type="button" name="" value="finish" class="button" style="margin-left:40%;"></li>

		</ul>
		</form>
	</div>

	</div>
	<div id="contact">asdasdasdaskdsakdsa</div>

</body>
</html>