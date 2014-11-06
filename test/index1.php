<html>
<body>
<?php 
$env_no=$_POST["env_no"];
$v_seq_no=$_POST["v_seq_no"];
$v_sqr_no=$_POST["v_sqr_no"];
$agent_no=$_POST["agent_no"];
$scb_no=$_POST["scb_no"];
$sbr_no=$_POST["sbr_no"];
$drv_no=$_POST["drv_no"];
$mon_no=$_POST["mon_no"];
$seq_no=$_POST["seq_no"];

echo"<h2>Testbench Information Review</h2>";
 echo"<p>Number of Environment :$env_no </p>";
 echo"<p>Number of Virtual Sequence :$v_seq_no</p>";
 echo"<p>Number of Virtual Sequencer :$v_sqr_no</p>";
 echo"<p>Number of Agent per Environment :$agent_no</p>";
 echo"<p>Number of Scoreboard per env :$scb_no</p>";
 echo"<p>Number of Subscriber per env :$sbr_no</p>";
 echo"<p>Number of Driver per Agent :$drv_no</p>";
 echo"<p>Number of Monitor per Agent :$mon_no</p>";
 echo"<p>Number of Sequencer per Agent :$seq_no</p>";

 
?>
</body>    
</html>