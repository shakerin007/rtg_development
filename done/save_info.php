<?php
	$db_username="angryanon";
	$db_password="";
	$db_name="rtg_test_1_db";
	$host="angryanon-rtg_development_git-1070192";
	$port=3306;
	mysql_connect($host,$db_username,"")or die(mysql_error());
    mysql_select_db($db_name) or die ("Could not get Information from Server");
	if(session_id() == ''){
		session_start();
		if(isset($_POST["submit"])){
			$username= mysql_real_escape_string($_POST['username']);
			$password= mysql_real_escape_string($_POST['password']);
			if(!$_POST['username'] | !$_POST['password']){
				echo "Empty field found";
				exit();
			}   
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;	
		}
  }
	else{
		session_start();
	}
		$_SESSION['tb_id']="";
		$username=$_SESSION['username'];
		$password=$_SESSION['password'];
	$sql = "SELECT `user_list`.`username`, `user_list`.`user_id`, `tb_list`.`tb_id`, `tb_list`.`tb_name`, `tb_list`.`tb_description`\n"
    . "FROM `user_list`\n"
    . " LEFT JOIN `rtg_test_1_db`.`tb_list` ON `user_list`.`user_id` = `tb_list`.`user_id` \n"
    . "WHERE (`user_list`.`username` = '$username')\n"
    . "";
	$query=mysql_query($sql);
	if(!$query){
		die('Invalid query: ' . mysql_error());
	}
	$num_of_result= mysql_num_rows($query);
	echo "<html>";
	echo "<head>";
	echo "<link rel='stylesheet' type='text/css' href='index.css'>";
	echo "</head>";
	echo "<body>";
	echo "<a href='new_TB.html'>Create New Testbench</a>";
	echo "<a href='logout.php'>Log Out</a>";
	echo "<h2>List of Testbenches</h2>";
	while($row = mysql_fetch_array($query, MYSQL_ASSOC)){
		echo "<form action='view_info.php' style='display:inline;' method='POST'>";
		echo  "<input type='hidden' name='TB_id' value={$row['tb_id']}   readonly></input>";
		echo  "<input type='text' name='tb_name' placeholder='{$row['tb_name']}' readonly></input> ";
		echo  "<input type='text' value='{$row['tb_description']}' width='200px' readonly></input>";
		echo  "<select name='view'>";
		echo  "<option value='command_list'> <em>View Command List</em></option> ";
		echo  "<option value='file_info'> <em>View File Information</em></option> ";			
		echo  "<option value='hierarchy'> <em>View Hierarchy</em></option> ";	
		echo  "</select>";
		echo  "<input type='submit' name='submit' value='View Testbench Information'></input>";
	
		echo "</form>";
		echo "<form action='delete_tb.php' style='display:inline;' method='POST'>";
		echo  "<input type='hidden' name='TB_id' value={$row['tb_id']}   readonly></input>";
		echo  "<input type='submit' name='delete' value='delete'></input>";
		echo "</form>";	
		echo "</br>";
		$_SESSION['user_id']=$row['user_id'];
	} 
	echo "</body>";
	echo "</html>";
	mysql_free_result($query);
	exit();
?>