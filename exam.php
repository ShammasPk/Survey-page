



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
					<li>CONTACT US</li>
				</ul></div>
	<div class="logo">
		<img src="image/logo.png" alt="" class="logo">
	</div>
		</div>
	</div>
	<div class="content">
	<div class="contentview">
	<div class="img">
		
			<div class="regbt"><h2>Click Register</h2> </div>

		
	</div>
	</div>

	<div class="popup">
			<div class="regform">
			<div class="closebt">X</div>
			<form method="post" action="test.php">
					<ul>
						<li class="l1"><label>Name</label>
						<input type="text" name="name" id="name"></li>
						<li class="l2"><label>Email</label>
						<input type="text" name="email" id="email"></li>
						<li class="l3"><label>Mobile</label>
						<input type="text" name="phone" id="phone"></li>
						<li><button type="" class="button" name="Register">Submit</button></li>
					</ul>
		
					
				</form>
				
			</div>
		</div>
		<div class="footer">
		<div class="addres">
		<div class="add">
			<ul>
				<li><h2>our address</h2></li>
				<li><label>psybo technologies</label></li>
				<li><label>v2 tower,opp old bus stand</label></li>
				<li>pandikad road ,manjeri,676121</li>
				<li>www.psybotechnologies.com</li>
				<li>info@www.psybotechnologies.com</li>
			</ul></div>
		</div>
	
			
		</div>
		</div>

	
	
</body>
</html>