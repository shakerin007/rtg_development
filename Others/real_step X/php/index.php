<html>
<body>


<?php
header('Location:../index1.html');
$value1=$_POST["value1"];
$value2=$_POST["value2"];



//shell_exec("./../scripts/testbench $value2 $value3 $value4 $value5 $value6");

$ip = "127.0.0.1";//getenv("REMOTE_ADDR");
$port = "3306";
$user = "angryanon";
$DB = "company";
$conn = mysql_connect("$ip:$port", "$user",'',"$DB");//or die(mysql_error());
mysql_select_db("$DB");//or die(mysql_error());
$order="INSERT INTO testbench_list(TB_name) VALUES('$value1')";
mysql_query($order,$conn);
mysql_close();

exit();
?>

</body>    
</html>