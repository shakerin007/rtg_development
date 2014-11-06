<html>
<body>
<?php 
$value1=$_POST["option"];
if($value1 == "create_testbench"){
/*    echo"<h2>$value1</h2>";
echo "<form action=\"index1.php\" method=\"post\">
 <p> Number of Environment in Test :<input type=\"number\" name=\"env_no\" min=\"1\" max=\"5\" value=\"1\"></br>
Number of Virtual Sequencer in Test :<input type=\"number\" name=\"v_seq_no\" min=\"1\" max=\"5\" value=\"1\"></br>
Number of Virtual Sequence in Test :<input type=\"number\" name=\"v_sqr_no\" min=\"1\" max=\"5\" value=\"1\"></br>
Number of Agent per Environment in Test :<input type=\"number\" name=\"agent_no\" min=\"1\" max=\"5\" value=\"1\"></br>
Number of Scoreboard per Environment in Test :<input type=\"number\" name=\"scb_no\" min=\"1\" max=\"5\" value=\"1\"></br>
Number of Subscriber per Environment in Test :<input type=\"number\" name=\"sbr_no\" min=\"1\" max=\"5\" value=\"1\"></br>
Number of Driver per Agent in Test :<input type=\"number\" name=\"drv_no\" min=\"1\" max=\"5\" value=\"1\"></br>
Number of Monitor per Agent in Test :<input type=\"number\" name=\"mon_no\" min=\"1\" max=\"5\" value=\"1\"></br>
Number of Sequencer per Agent in Test :<input type=\"number\" name=\"seq_no\" min=\"1\" max=\"5\" value=\"1\"></br>
<input type=\"submit\" name=\"Submit\" value=\"submit\"></p>

</form>";*/
include("Testbench_hierarchy.html");

    
}

else{
    
     include("Testbench_hierarchy.html");
}
?>
</body>    
</html>