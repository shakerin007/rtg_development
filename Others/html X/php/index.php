<html>
<body>


<?php 


$value1=$_POST["value1"];
$value2=$_POST["value2"];
$value3=$_POST["value3"];
$value4=$_POST["value4"];
$value5=$_POST["value5"];
$value6=$_POST["value6"];

shell_exec("./../scripts/testbench $value2 $value3 $value4 $value5 $value6");
$files=glob("../php/$value4/*"); 
$date=str_split(getdate());
$ip = "127.0.0.1";
$port = "3306";
$user = "angryanon";
$DB = "company";
$conn = mysql_connect("$ip:$port", "$user",'',"$DB");//or die(mysql_error());
mysql_select_db("$DB");//or die(mysql_error());
$order="INSERT INTO testbench_list(TB_name,Date_Created,location) VALUES('$value4','$date','../$value4')";
mysql_query($order,$conn);
mysql_close();

foreach($files as $file){
$split_size=8+strlen($value4);    
$name=substr($file,$split_size);
echo "<a href = '../$value4/$file' >download  $name</br> </a>";
}

?>


</body>    
</html>