<html>
<body>


<?php
header('Location:../tb_1.html');
$username=$_POST["username"];
$password=$_POST["password"];
$email=$_POST["email"];



//shell_exec("./../scripts/testbench $value2 $value3 $value4 $value5 $value6");

$ip = "127.0.0.1";//getenv("REMOTE_ADDR");
$port = "3306";
$user = "angryanon";
$DB = "company";
$conn = mysql_connect("$ip:$port", "$user",'',"$DB");//or die(mysql_error());
mysql_select_db("$DB");//or die(mysql_error());
$order="INSERT INTO profile_tb(username,email) VALUES('$username','$email')";
mysql_query($order,$conn);
mysql_close();

exit();
?>

</body>    
</html>