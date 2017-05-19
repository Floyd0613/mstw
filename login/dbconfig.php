<?php


	$db_host = "localhost";
	$db_name = " id1463871_imtb";
	$db_user = "id1463871_imtb";
	$db_pass = "im1050603";
	
	try{
		
		$db_con = new PDO("mysqli:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}


?>