<html>
<body>


<?php
header('Location:../html/testbench_creation.html');
$tb_name=$_POST["tb_name"];
$agent_file_name=$_POST["agent_file_name"];
$agent_prefix=$_POST["agent_prefix"];
$sqr_prefix=$_POST["sqr_prefix"];


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