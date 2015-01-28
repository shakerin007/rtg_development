<?php
	session_start();
	$user_id= $_SESSION['user_id'];
	$tb_create_vars=array();
	foreach ($_POST as $key => $value){
	array_push($tb_create_vars,$value);
	}
	$tb_name= $tb_create_vars[0];
	$tb_description=$tb_create_vars[1];
	$db_username="angryanon";
	$db_password="";
	$db_name="rtg_test_1_db";
	$host="angryanon-rtg_development_git-1070192";
	$port=3306;
	mysql_connect($host,$db_username,"")or die(mysql_error());
    mysql_select_db($db_name) or die ("Could not get Information from Server");
	$sql = "INSERT INTO `rtg_test_1_db`.`tb_list` (`tb_id`, `user_id`, `tb_name`, `tb_description`) VALUES (NULL, '$user_id', '$tb_name', '$tb_description');";
	$query=mysql_query($sql);
	if(!$query){
		die('Invalid query: ' . mysql_error());
	}
	header('Location: save_info.php');
?>