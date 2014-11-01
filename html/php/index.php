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
foreach($files as $file) 
echo "<a href = '../$value4/$file' >download $file</br> </a>";

?>


</body>    
</html>