<?php
//session_start();
?>

<html>
<body>


<?php

header('Location:../testbench_creation.html');
//$tb_name=$_POST["tb_name"];
//$Description=$_POST["Description"];

//$_SESSION("tb_name")=$_POST["tb_name"];
//$_SESSION("Description")=$_POST["Description"];



//shell_exec("./../scripts/testbench $value2 $value3 $value4 $value5 $value6");
/*
$ip = "127.0.0.1";//getenv("REMOTE_ADDR");
$port = "3306";
$user = "angryanon";
$DB = "company";
$conn = mysql_connect("$ip:$port", "$user",'',"$DB");//or die(mysql_error());
mysql_select_db("$DB");//or die(mysql_error());
$order="INSERT INTO testbench_list(TB_name) VALUES('$value1')";
mysql_query($order,$conn);
mysql_close();

exit();*/
?>

</body>    
</html>