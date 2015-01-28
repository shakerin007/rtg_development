<html>
<body>


<?php 

$value1=$_POST["value1"];
$value2=$_POST["value2"];
$value3=$_POST["value3"];
$value4=$_POST["value4"];
$value5=$_POST["value5"];
$value6=$_POST["value6"];
$value7=$_POST["value7"];


$virtual_sequencer_file="$value2"."_vsequencer.sv";
$virtual_sequencer_class="$value2"."_vsequencer";

$virtual_sequencer_ins="$value2"."_vsequencer_ins";
$virtual_sequence_file="$value2"."_vsequence.sv";
$virtual_sequence_class="$value2"."_vsequence";
$virtual_sequence_ins="$value2"."_vsequence_ins";
$subscriber_file="$value2"."_subscriber.sv";
$subscriber_class="$value2"."_sbr";
$subscriber_ins="$value2"."_sub_ins";
$scoreboard_file="$value2"."_scb.sv";
$scoreboard_class="$value2"."_scb";
$scoreboard_ins="$value2"."_scb_ins";
$scb_pkt="$value2"."_sent_pkt";
$scoreboard_port="$value2"."_scb_port";

$env_file="$value2"."_env.sv";
$env_class="$value2"."_env";
$env_ins="$value2"."_env_ins";
$agent_file="$value2"."_agent.sv";
$agent_class="$value2"."_agent";
$agent_ins="$value2"."_agent_ins";
$agent_port="$value2"."_a_port";
$driver_file="$value2"."_driver.sv";
$driver_class="$value2"."_driver";
$driver_ins="$value2"."_driver_ins";
$monitor_file="$value2"."_monitor.sv";
$monitor_class="$value2"."_monitor";
$monitor_ins="$value2"."_monitor_ins";
$mon_port="$value2"."_mon_port";
$sequencer_file="$value2"."_sequencer.sv";
$sequencer_class="$value2"."_sequencer";
$sequencer_ins="$value2"."_sequencer_ins";
$sequence_file="$value2"."_sequence.sv";
$sequence_class="$value2"."_sequence";
$sequence_ins="$value2"."_sequence_ins";
$sequence_item_file="$value2"."_sequence_item.sv";
$sequence_item_class="$value2"."_trans";
$sequence_item_ins="$value2"."_trans_ins";

shell_exec("./../scripts/testbench $value2 $value3 $value4 $value5 $value6");
$files=glob("../php/$value4/*"); 
$date=str_split(getdate());
$ip = "127.0.0.1";//getenv("REMOTE_ADDR");
$port = "3306";
$user = "angryanon";
$DB = "company";
$conn = mysql_connect("$ip:$port", "$user",'',"$DB");//or die(mysql_error());
mysql_select_db("$DB");//or die(mysql_error());
$order="INSERT INTO testbench_list(TB_name,location) VALUES('$value4','$env_class')";
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