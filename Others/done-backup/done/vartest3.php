<?php 
	session_start();
	$sequencial_commands=array();
	$sequencial_commands_id=array();
	$variable_1=array();
	$variable_2=array();
	$variable_3=array();
	$variable_4=array();
	$tb_id=$_SESSION['tb_id'];
	$sequencial_commands=$_SESSION['sequencial_command'];
	$sequencial_commands_id=$_SESSION['sequencial_command_id'];
	$variable_1=$_SESSION['variable_01'];
	$variable_2=$_SESSION['variable_02'];
	$variable_3=$_SESSION['variable_03'];
	$variable_4=$_SESSION['variable_04'];
?>
<html>
	<head>
		<script src="classes1.js" type="text/javascript"></script> 
		<link rel="stylesheet" type="text/css" href="index.css"> 
		<?php echo "<a href='save_info.php'>Show List of Testbenches</a>"; ?>
		<?php echo "<a href='logout.php'>Log Out</a>"; ?>
	<head>
	<body>
		<h2>List of Commands</h2>
		<fieldset>
				<?php 
					for($i=0;$i<sizeof($sequencial_commands);$i++){ 
						echo "<form action='delete_command.php' method='POST'>";
						echo  "<input type='hidden' name='command_id' value='{$sequencial_commands_id[$i]}' readonly></input>";
						echo  "<input type='text' value='{$sequencial_commands[$i]}' placeholder='{$sequencial_commands[$i]}' readonly></input>";
						echo  "<input type='text' value='{$variable_1[$i]}' placeholder='{$variable_1[$i]}' readonly></input>";
						echo  "<input type='text' value='{$variable_2[$i]}' placeholder='{$variable_2[$i]}' readonly></input>";
						echo  "<input type='text' value='{$variable_3[$i]}' placeholder='{$variable_3[$i]}' readonly></input>";
						echo  "<input type='text' value='{$variable_4[$i]}' placeholder='{$variable_4[$i]}' readonly></input>";
						echo  "<input type='submit' name='delete' value='delete'></input>";
						echo "<p></p>";
						echo "</form>";
						} 	
					echo  "<p Id='placement_command'></p>";
				?>
		  <form action='view_info.php' action='POST'>
				<select name='class_create' Id='class_create'>
					<option></option>
					<option>create whole testbench</option>
					<option>create new environment class</option>
					<option>create new scoreboard class</option>
					<option>create new subscriber class</option>
					<option>create new agent class</option>
					<option>create new driver class</option>
					<option>create new monitor class</option>	
					<option>create new sequencer class</option>		
					<option>create new sequence class</option>
					<option>create new base sequence</option>	
					<option>create new test</option>	
				</select>
				<input type='button' name='class_create' value='Add New Class' Id='class_create_button' onclick="myFunction('placement_command','class_create','class_create')"></input>				
			</form>
		</fieldset>
	</body>
</html>
