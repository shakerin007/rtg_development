<html>
	<head>

		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<title>Testbench Creation</title>
	</head>

<body>
		<legend><h1> || Work Zone ::  Options ||</h1></legend> 
		

			<h3>Select any one option</h3>

        <form action="index.php" method="post">
        <input type="radio" name="option" value="create_testbench">  Create Testbench<br>
        <input type="radio" name="option" value="my_testbenches"> My Testbench<br>
		<input type="submit" name="submit" value="submit">
		</form>

<?php 
$value1=$_POST["option"];
if($value1 == "create_testbench"){
		echo"<input type=\"submit\" name=\"submit\" value=\"create_testbench\">";
  echo "<form action=\"index.php\" method=\"post\">
        <input type=\"radio\" name=\"option\" value=\"create_testbench\">  Create Testbench<br>
        <input type=\"radio\" name=\"option\" value=\"my_testbenches\"> My Testbench<br>
		<input type=\"submit\" name=\"submit\" value=\"submit\">
		</form>";
}

else{

}
?>

</body>    
</html>