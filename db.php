<?php

	$PDOhost = "localhost";
	$PDOdbname = "ndhuball_db";
	$PDOuser = "andy";
	$PDOpassword = "aotech2018";


	/*PDO 連接寫法*/ 
	try{
		$PDO = new PDO("mysql:host=localhost;dbname=ndhuball_db",$PDOuser,$PDOpassword);
		$PDO->query("SET NAMES 'utf8'");
		$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		print "連接失敗" . $e->getMessage();
	}
session_start();
function intTostr($val){
	$array = ['一','二','三','四','五','六','日'];
	
	foreach($array as $k => $v){
		if($val - 1 == $k){
			return $array[$k];
		}
	}
}

function check_login(){
	if(!isset($_SESSION['id'])){
		header("location:page-login.php");
	}
}










?>