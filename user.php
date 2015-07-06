<?php

$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];

	$db= new Database('localhost','root','admin','Psybo');
	// $db->insert();
	$table_name="user";
	$fields=array("name","email","number";
	$values=array("naseeba","sadfghs","222");
	$db->insert($table_name, $fields, $values);



?>