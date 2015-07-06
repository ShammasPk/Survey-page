<?php

error_reporting(E_ALL);

 class Database
 {
 	private $hostname = "localhost";
	private $username = "root";
	private $password = "admin";
	private $dbname = "Psybo";
	private $condb="";
	

 	public function __construct($host, $user, $pword, $db)
 	{
 		$this->hostname = $host;
		$this->username = $user;
		$this->password = $pword;
		$this->dbname = $db;
		$this->connect();
 	}
 	



	// Create connection
	private function connect()
	{
		//return new mysqli($this->$serv, $this->user, $this->password, $this->database);
		$this->condb = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
		if ($this->condb->connect_error)
		{
			die('connect_error('.$this->condb->connect_errorno.')'.$this->condb->connect_errorno);
		}
		
	}

	

	// insert into tablename (username,password) values (?,?);
	// insert into tablename (username,password) values ('dfsfa','dfsafds');
	public function insert($table,$fields,$values)
	{
		$insert="INSERT INTO ".$table;
		//check table data
		if ($fields!=null)
		{
			//echo fields(create string format)
			$fields='`'.implode('`, `', $fields).'`';
			$insert .=" (".$fields.")";

		}
		
		$cnt = count($values);
		$value=str_repeat("?,", $cnt-1).'?';
	    $insert.= " VALUES (".$value.")";
		

		$value_type="";

		for ($i=0; $i <$cnt; $i++) 
		{ 
			if (is_string($values[$i]))
			 {
			 	$value_type.="s";
			 }
			 else
			 {
			 	$value_type.="i";
			 }

	    }
	    
	    
	    $stmt=$this->condb->prepare($insert);
	    //bind values using bind param
	    $params[0] = &$value_type;
	    foreach ($values as $key => $value)
	    {	
	    	$params[$key+1] = &$values[$key];

	    }
	    call_user_func_array(array(&$stmt ,'bind_param'), $params);
	    // $stmt ->bind_param($value_type,$values[0],$values[1]);
	   	// $stmt ->bind_param($value_type,$values[]);
	    $stmt->execute();



	    if ($stmt===FALSE)
	    {
	    	echo "error";
	    }
	    else
	    {
	    	echo "one created,value inserted";
	    }
	    //$stmt->bind_param("");

	    //var_dump($insert);
	}

	public function select($table,$fields,$where)
	{
		$count= count($fields);
		$fields=implode(',',$fields);
		$select="SELECT ";

		if($fields==null)
		{
			$select.="* FROM " .$table;
		}
		else
		{
			$select.=$fields ." FROM ".$table;
		}

		if($where!=null)
		{
			$select.=" WHERE ".$where[0]. "= ";
			if (is_string($where[1]))
			{
				$select.= "'" .$where[1]. "'";
			}
		
		}



	$query=mysqli_query($this->condb,$select);
	if($query===FALSE)
		return user_error($this->condb->error);
	$recs= array();
	while (($rec= mysqli_fetch_array($query)))
		array_push($recs,$rec);
		//echo $rec;
		return $recs;
	}
	


	public function update($table, $fields, $values, $where)
	{
		$update = " UPDATE ".$table." SET ";
		
		//foreach ($fields as $value) 
		$count=count($fields);
			for ($i=0; $i <$count ; $i++) 
			{
				$cnt=count($fields);
				$update .=$fields[$i]." = ? ";
				if($i != $count-1)
				{
				
					$update .=',';
				}
			}
		
		$fields = implode(',',$fields);
  		$update .=" WHERE ".$where;

		var_dump($update);

  		$type="";
		for ($i=0; $i <$count; $i++) 
		{ 
			if (is_string($values[$i]))
			 {
			 	$type.="s";
			 }
			 else
			 {
			 	$type.="i";
			 }

	    }
	   /* var_dump($type);
	    var_dump($values);*/
	    
  		$stmt=$this->condb->prepare($update);
	   //  $type='sss';
	    $param[0]= &$type;
	    foreach ($values as $key => $value)
	    {
	    	$param[$key+1] = &$values[$key];
	    }
	    call_user_func_array(array(&$stmt,'bind_param'),$param);
	    //$stmt->bind_param($type, $values);
	    $stmt->execute();
  		//var_dump($s);
		
	
		//print_r($fields);
		// echo($i);
		// echo($fields);
	}
		
		



   	

	public function delete($table,$where)
	{
        if(isset($this->condb))
        {
            $delete = "DELETE FROM ".$table." WHERE ".$where;
            $this->condb->query($delete);
            var_dump($delete);
            if($this->condb->affected_rows > 0)
            {
                return true;
            }
            return false;
        }
    }
}
	

 
 
 
	$db= new Database('localhost','root','admin','Psybo');
	// $db->insert();
	$table_name="employees";
	$fields=array("name","address");
	$values=array("naseeba","sadfghs");
	$db->insert($table_name, $fields, $values);

	
	/*$fields=array("");
	$where=array("id","1");
	$result=$db->select($table_name,$fields,$where);
	var_dump($result);*/
	
 	$where="id=4";
 	// $fields=array("name='AA'","address='SS'");
 	
	// $db->update($table_name, $fields, $values, $where);


	
	//$db->delete($table_name,'id=0');
 	



?>
