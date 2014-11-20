
<?php
$ip = "127.0.0.1";//getenv("REMOTE_ADDR");
$port = "3306";
$user = "angryanon";
$DB = "company";



$conn = mysql_connect("$ip:$port", "$user",'',"$DB")or die(mysql_error());
mysql_select_db("$DB");//or die(mysql_error());
$order = "INSERT INTO `login` (`username`,`password`) VALUES('shake','shake')";
$result = mysql_query($order);
//$query=mysql_query("SELECT username FROM login","$conn");//or die(mysql_error());

//while($row = mysql_fetch_array($query, MYSQL_ASSOC))
//{
//    echo "EMP ID :{$row['username']}  <br> 
//
//         --------------------------------<br>";
//} 

while($data = mysql_fetch_row($result)){
    echo "$data[0] $data[1] $data[2] ";
    
}

mysql_close();

?>
<html>
<body>
    <h2>MYSQL </h2>
</body>
</html>