<?php
	session_start();
	$sequencial_command_id=array();
	$sequencial_command=array();
	$variable_01=array();
	$variable_02=array();
	$variable_03=array();
	$variable_04=array();
	$tb_id=$_POST['TB_id'];
	$_SESSION['tb_id']=$tb_id;
	$view=$_POST['view'];
	$db_username="angryanon";
	$db_password="";
	$db_name="rtg_test_1_db";
	$host="angryanon-rtg_development_git-1070192";
	$port=3306;
	mysql_connect($host,$db_username,"")or die(mysql_error());
    mysql_select_db($db_name) or die ("Could not get Information from Server");
	$sql = "SELECT `tb_info`.`cmd_id`, `cmd_list`.`type`, `tb_info`.`argument1`, `tb_info`.`argument2`, `tb_info`.`argument3`, `tb_info`.`argument4`\n"
    . "FROM `tb_list`\n"
    . " LEFT JOIN `rtg_test_1_db`.`tb_info` ON `tb_list`.`tb_id` = `tb_info`.`tb_id` \n"
    . " LEFT JOIN `rtg_test_1_db`.`cmd_list` ON `tb_info`.`cmd` = `cmd_list`.`cmd` \n"
    . "WHERE (`tb_list`.`tb_id` = $tb_id)\n"
    . " LIMIT 0, 30 ";
	$query=mysql_query($sql);
	if(!$query){
		die('Invalid query: ' . mysql_error());
	}
	$num_of_result= mysql_num_rows($query);
	if($view == 'command_list'){
		unset($_SESSION['variable_01']);
		unset($_SESSION['variable_02']);
		unset($_SESSION['variable_03']);
		unset($_SESSION['variable_04']);
		unset($_SESSION['sequencial_command']);
		unset($_SESSION['sequencial_command_id']);
		while($row = mysql_fetch_array($query, MYSQL_ASSOC)){
			array_push($sequencial_command_id,$row['cmd_id']);
			array_push($sequencial_command,$row['type']);
			array_push($variable_01,$row['argument1']);
			array_push($variable_02,$row['argument2']);
			array_push($variable_03,$row['argument3']);
			array_push($variable_04,$row['argument4']);
		} 		
		$_SESSION['sequencial_command_id']=$sequencial_command_id;
		$_SESSION['sequencial_command']=$sequencial_command;
		$_SESSION['variable_01']=$variable_01;
		$_SESSION['variable_02']=$variable_02;
		$_SESSION['variable_03']=$variable_03;
		$_SESSION['variable_04']=$variable_04;
		mysql_free_result($query);
		header('Location: vartest3.php');
	}
	elseif($view == 'file_info'){
		unset($_SESSION['variable_01']);
		unset($_SESSION['variable_02']);
		unset($_SESSION['variable_03']);
		unset($_SESSION['variable_04']);
		unset($_SESSION['sequencial_command']);
		while($row = mysql_fetch_array($query, MYSQL_ASSOC)){
			array_push($sequencial_command,$row['type']);
			array_push($variable_01,$row['argument1']);
			array_push($variable_02,$row['argument2']);
			array_push($variable_03,$row['argument3']);
			array_push($variable_04,$row['argument4']);
		} 
		mysql_free_result($query);		
		$_SESSION['sequencial_command']=$sequencial_command;
		$_SESSION['variable_01']=$variable_01;
		$_SESSION['variable_02']=$variable_02;
		$_SESSION['variable_03']=$variable_03;
		$_SESSION['variable_04']=$variable_04;
		header('Location: vartest2.php');
	}
?>
