<?php
	session_start();
	$db_username="angryanon";
	$db_password="";
	$db_name="rtg_test_1_db";
	$host="angryanon-rtg_development_git-1070192";
	$port=3306;
	mysql_connect($host,$db_username,"")or die(mysql_error());
    mysql_select_db($db_name) or die ("Could not get Information from Server");

	$command_id=$_POST['command_id'];
	$sql = "DELETE FROM `rtg_test_1_db`.`tb_info` WHERE `tb_info`.`cmd_id` = $command_id";
	$query=mysql_query($sql);
	if(!$query){
		die('Invalid query: ' . mysql_error());
	}
	header('Location: save_info.php');
?>