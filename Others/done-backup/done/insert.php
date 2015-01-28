<?php 
	$whole_tb="create whole testbench";
	$new_env= "create new environment class";
	$add_env="add new environment instance";
	$new_scb="create new scoreboard class";
	$add_scb="add new scoreboard instance";
	$new_sub="create new subscriber class";
	$add_sub="add new subscriber instance";
	$new_agent="create new agent class";
	$add_agent="add new agent instance";
	$new_drv="create new driver class";
	$add_drv="add new driver instance";
	$new_mon="create new monitor class";
	$add_mon="add new monitor instance";
	$new_sqr="create new sequencer class";
	$add_sqr="add new sequencer instance";
	$add_seq="create new sequence class";
	$new_seq="create new base sequence";
	$new_test="create new test";
	session_start();
	$cmd="";
	$tb_id=$_SESSION['tb_id'];
	$argument1="";
	$argument2= "";
	$argument3= "";
	$argument4= "";
	$count=0;
	$variables=array();

	foreach ($_POST as $key => $value){

		
		array_push($variables, $value);
		$count++;
	}

	$argument1=$variables[0];
	$argument2= $variables[1];

	switch($count){
		case 3:
			$argument3="";
			$argument4="";
			$cmd=$variables[2];
		break;
		case 4:
			$argument3=$variables[2];
			$argument4="";
			$cmd=$variables[3];
		break;
		default:
			$argument3=$variables[2];
			$argument4=$variables[3];
			$cmd=$variables[4];
		}

	switch($cmd){
		case $whole_tb:
			  	$cmd_id=1;
			  	break;
		case $new_env:		
				$cmd_id=2;
				break;
		case $add_env:
				$cmd_id=3;
				break;
		case $new_scb:
				$cmd_id=4;
				break;
		case $add_scb:
				$cmd_id=5;
				break;
		case $new_sub:
				$cmd_id=6;
				break;
		case $add_sub:
				$cmd_id=7;
				break;
		case $new_agent:
				$cmd_id=8;
				break;
		case $add_agent:
				$cmd_id=9;
				break;
		case $new_drv:
				$cmd_id=10;
				break;
		case $add_drv:
				$cmd_id=11;
				break;
		case $new_mon:
				$cmd_id=12;
				break;
		case $add_mon:
				$cmd_id=13;
				break;
		case $new_sqr:
				$cmd_id=14;
				break;
		case $add_sqr:
				$cmd_id=15;
				break;
		case $add_seq:
				$cmd_id=16;
				break;
		case $new_seq:
				$cmd_id=17;
				break;
		case $new_test:
				$cmd_id=18;
				break;
		default:
				break;
	}
	


	$db_username="angryanon";
	$db_password="";
	$db_name="rtg_test_1_db";
	$host="angryanon-rtg_development_git-1070192";
	$port=3306;
	mysql_connect($host,$db_username,"")or die(mysql_error());
    mysql_select_db($db_name) or die ("Could not get Information from Server");

//$sql = "INSERT INTO `rtg_test_1_db`.`tb_info` (`cmd_id`, `cmd`, `tb_id`, `argument1`, `argument2`, `argument3`, `argument4`) VALUES (NULL, \'2\', \'2\', \'argument1\', \'argument1\', \'argument1\', \'argument1\');";
echo "<h1>Error</h1>";
echo $cmd_id;
$sql = "INSERT INTO `rtg_test_1_db`.`tb_info` (`cmd_id`, `cmd`, `tb_id`, `argument1`, `argument2`, `argument3`, `argument4`) VALUES (NULL,'$cmd_id', '$tb_id','$argument1' ,'$argument2','$argument3','$argument4' );";

$query=mysql_query($sql);
	if(!$query){
		die('Invalid query: ' . mysql_error());
	}
	header('Location: save_info.php');
?>