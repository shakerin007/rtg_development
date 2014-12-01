<html>
<body>


<?php
header('Location:../html/testbench_creation.html');
$tb_name=$_POST["tb_name"];
$tb_prefix=$_POST["tb_prefix"];
$top_file_name=$_POST["top_file_name"];
$base_test_file_name=$_POST["base_test_file_name"];
$base_test_class_name=$_POST["base_test_class_name"];



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