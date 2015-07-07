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



	//$fields=array("id","questions","opt1","opt2","opt3","opt4","answer");
    $fields="";
	$where="";
	$result=$db->select($table_name,$fields,$where);
	//var_dump($result);

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
		<!--<?php 
		//var_dump($result);
			//$count=
			//echo $count;
				//echo $result['questions'];
				# code...
			
				# code...
				//var_dump($value['id']);
			//}
			
		 //echo ($result['id']);	
		 //echo ($result['questions']);	
		?>-->
		<form method="post" action="result.php" >

		<ul>
		<?php 
			$i=1;
		 foreach ($result as $key => $value) { ?>
			<li >
			
				<h3><?php echo $i.".".$value['questions'];?></h3>
				<table align="center" width="90%" cellpadding="5" cellspacing="5" border="0"> <tr>
					<td><label><input type="radio" name=<?php echo $i;?>> <?php echo $value['opt1'] ;?></label>	</td>
					<td><input type="radio" name=<?php echo $i;?>>	<label><?php echo $value['opt2'] ;?></label>	</td>

				</tr>
				<tr>
					<td><input type="radio" name=<?php echo $i;?>>	<label><?php echo $value['opt3'] ;?></label>	</td>
					<td><input type="radio" name=<?php echo $i;?>>	<label><?php echo $value['opt4'] ;?></label>	</td>

				</tr>
				</table>

			</li>
		<?php $i++;}?>
			<li style="list-style:none;"><input type="button" name="submit" value="finish" class="button" style="margin-left:40%;"></li>
		</ul>
	</form>
	</div>

 </div>
	

</body>
</html>