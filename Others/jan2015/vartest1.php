<?php 
	$formCount=0;   
	$instance_count=0;
	$command_no=0;
	$variable_1=array("uart","apb","ahb","apb4","apb4_scb","apb4","apb4_subscriber","apb7","apb7_agent","apb","apb8_driver");
	$variable_2=array("uart_top.sv","uart_base_test.sv","ahb2_ins","apb_env.sv","apb4_scb_ins2","apb_env.sv","apb4_subscriber_ins2","apb_env.sv","apb7_agent_ins7","apb8","apb8_driver_ins");
	$variable_3=array("uart_base_test.sv","","uart_base_test.sv","apb_trans","apb_env.sv","apb_trans","apb_env.sv","apb","apb_env.sv","","apb_agent.sv");
	$variable_4=array("uart_base_test","","","","","","","","");
	$file_name=array();
	$class=array();
	$type=array();
	$instances=array();
	$instance_class=array();
function tb_create(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	
	array_push($file_name,
								 $variable_1[$command_no]."_top.sv",
								 $variable_1[$command_no]."_base_test.sv",
								 $variable_1[$command_no]."_vsequencer.sv",
								 $variable_1[$command_no]."_vsequence.sv",
								 $variable_1[$command_no]."_env.sv",
								 $variable_1[$command_no]."_scb.sv",
								 $variable_1[$command_no]."_subscriber.sv",
								 $variable_1[$command_no]."_agent.sv",
								 $variable_1[$command_no]."_driver.sv",
								 $variable_1[$command_no]."_monitor.sv",
								 $variable_1[$command_no]."_sequencer.sv",
								 $variable_1[$command_no]."_sequence.sv",
								 $variable_1[$command_no]."_sequence_item.sv",
								 $variable_1[$command_no]."_intf.sv",
								 $variable_1[$command_no]."_pkg.sv"
						);
	array_push($class,
								$variable_1[$command_no]."_top",
								$variable_1[$command_no]."_base_test",
								$variable_1[$command_no]."_vsequencer",
								$variable_1[$command_no]."_vsequence",
								$variable_1[$command_no]."_env",
								$variable_1[$command_no]."_scb",
								$variable_1[$command_no]."_subscriber",
								$variable_1[$command_no]."_agent",
								$variable_1[$command_no]."_driver",
								$variable_1[$command_no]."_monitor",
								$variable_1[$command_no]."_sequencer",
								$variable_1[$command_no]."_sequence",
								$variable_1[$command_no]."_trans",
								$variable_1[$command_no]."_intf",
								$variable_1[$command_no]."_pkg"	
						);
	array_push($type,
								"top",
								"base_test",
								"vsequencer",
								"vsequence",
								"environment",
								"scoreboard",
								"subscriber",
								"agent",
								"driver",
								"monitor",
								"sequencer",
								"sequence",
								"sequence_item",
								"interface_file",
								"package file"
						);
	array_push($instances,
										array(""),
										array($variable_1[$command_no]."_env_ins",$variable_1[$command_no]."_vsequence_ins"),
										array($variable_1[$command_no]."_sequencer_ins"),
										array($variable_1[$command_no]."_sequence_ins"),
										array($variable_1[$command_no]."_vsequence_ins",$variable_1[$command_no]."_scb_ins",$variable_1[$command_no]."_subscriber_ins",$variable_1[$command_no]."_agent_ins"),
										array($variable_1[$command_no]."_trans_ins"),
										array($variable_1[$command_no]."_trans_ins"),
										array($variable_1[$command_no]."_driver_ins",$variable_1[$command_no]."_monitor_ins",$variable_1[$command_no]."_sequencer_ins"),
										array($variable_1[$command_no]."_trans_ins"),
										array($variable_1[$command_no]."_trans_ins"),
										array($variable_1[$command_no]."_trans_ins"),
										array($variable_1[$command_no]."_trans_ins"),
										array(""),
										array(""),
										array("")
						);
	array_push($instance_class,
											array(""),
											array($variable_1[$command_no]."_env",$variable_1[$command_no]."_vsequence"),
											array($variable_1[$command_no]."_sequencer"),
											array($variable_1[$command_no]."_sequence"),
											array($variable_1[$command_no]."_vsequence",$variable_1[$command_no]."_scb",$variable_1[$command_no]."_subscriber",$variable_1[$command_no]."_agent"),
											array($variable_1[$command_no]."_trans"),
											array($variable_1[$command_no]."_trans"),
											array($variable_1[$command_no]."_driver",$variable_1[$command_no]."_monitor",$variable_1[$command_no]."_sequencer"),
											array($variable_1[$command_no]."_trans"),
											array($variable_1[$command_no]."_trans"),
											array($variable_1[$command_no]."_trans"),
											array($variable_1[$command_no]."_trans"),
											array(""),
											array(""),
											array("")					
						);
	
}
function env_ins_add(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;	
	$key=array_search($variable_2[$command_no], $file_name);
	array_push($instances[$key],
										$variable_1[$command_no]."_env_ins"
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]."_env"
						);	
}
function env_create(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;	
	array_push($file_name,
								$variable_1[$command_no]."_vsequencer.sv",
								$variable_1[$command_no]."_vsequence.sv",
								$variable_1[$command_no]."_env.sv",
								$variable_1[$command_no]."_scb.sv",
								$variable_1[$command_no]."_subscriber.sv",
								$variable_1[$command_no]."_agent.sv",
								$variable_1[$command_no]."_driver.sv",
								$variable_1[$command_no]."_monitor.sv",
								$variable_1[$command_no]."_sequencer.sv",
								$variable_1[$command_no]."_sequence.sv",
								$variable_1[$command_no]."_sequence_item.sv"
							);	 
  array_push($class,
								$variable_1[$command_no]."_vsequencer",
								$variable_1[$command_no]."_vsequence",
								$variable_1[$command_no]."_env",
								$variable_1[$command_no]."_scb",
								$variable_1[$command_no]."_subscriber",
								$variable_1[$command_no]."_agent",
								$variable_1[$command_no]."_driver",
								$variable_1[$command_no]."_monitor",
								$variable_1[$command_no]."_sequencer",
								$variable_1[$command_no]."_sequence",
								$variable_1[$command_no]."_trans"					
						);
	array_push($type,
								"vsequencer",
								"vsequence",
								"environment",
								"scoreboard",
								"subscriber",
								"agent",
								"driver",
								"monitor",
								"sequencer",
								"sequence",
								"sequence_item"
						);
	array_push($instances,
										array($variable_1[$command_no]."_sequencer_ins"),
										array($variable_1[$command_no]."_sequence_ins"),
										array($variable_1[$command_no]."_vsequence_ins",$variable_1[$command_no]."_scb_ins",$variable_1[$command_no]."_subscriber_ins",$variable_1[$command_no]."_agent_ins"),
										array($variable_1[$command_no]."_trans_ins"),
										array($variable_1[$command_no]."_trans_ins"),
										array($variable_1[$command_no]."_driver_ins",$variable_1[$command_no]."_monitor_ins",$variable_1[$command_no]."_sequencer_ins"),
										array($variable_1[$command_no]."_trans_ins"),
										array($variable_1[$command_no]."_trans_ins"),
										array($variable_1[$command_no]."_trans_ins"),
										array($variable_1[$command_no]."_trans_ins"),
										array("")
						);
	array_push($instance_class,
											array($variable_1[$command_no]."_sequencer"),
											array($variable_1[$command_no]."_sequence"),
											array($variable_1[$command_no]."_vsequence",$variable_1[$command_no]."_scb",$variable_1[$command_no]."_subscriber",$variable_1[$command_no]."_agent"),
											array($variable_1[$command_no]."_trans"),
											array($variable_1[$command_no]."_trans"),
											array($variable_1[$command_no]."_driver",$variable_1[$command_no]."_monitor",$variable_1[$command_no]."_sequencer"),
											array($variable_1[$command_no]."_trans"),
											array($variable_1[$command_no]."_trans"),
											array($variable_1[$command_no]."_trans"),
											array($variable_1[$command_no]."_trans"),
											array("")
						);
	env_ins_add();
}
function env_ins_create(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;	
	$key=array_search($variable_3[$command_no], $file_name);
	array_push($instances[$key],
										$variable_2[$command_no]
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]
						);	
}
function scb_ins_add(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	$key=array_search($variable_2[$command_no], $file_name);
	array_push($instances[$key],
										$variable_1[$command_no]."_scb_ins"
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]."_scb"
						);	
}
function scb_create(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	array_push($file_name,
							$variable_1[$command_no]."_scb.sv"
						);
	array_push($class,
							$variable_1[$command_no]."_scb"
						);
	array_push($type,
							"scoreboard"
						);
	array_push($instances,
							array($variable_3[$command_no]."_ins")
						);
	array_push($instance_class,
							array($variable_3[$command_no])
						);
	scb_ins_add();
}
function scb_ins_create(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	$key=array_search($variable_3[$command_no], $file_name);
	array_push($instances[$key],
										$variable_2[$command_no]
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]
						);
}
function sub_ins_add(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	$key=array_search($variable_2[$command_no], $file_name);
	array_push($instances[$key],
										$variable_1[$command_no]."_subscriber_ins"
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]."_subscriber"
						);
}
function sub_create(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	array_push($file_name,
							$variable_1[$command_no]."_subscriber.sv"	
						);
	array_push($class,
							$variable_1[$command_no]."_subscriber"
						);
	array_push($type,
							"subscriber"
						);
	array_push($instances,	
							array($variable_3[$command_no]."_ins")
						);
	array_push($instance_class,
							array($variable_3[$command_no])
						);
	sub_ins_add();
}
function sub_ins_create(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	$key=array_search($variable_3[$command_no], $file_name);
	array_push($instances[$key],
										$variable_2[$command_no]
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]
						);
}
function agent_ins_add(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	$key=array_search($variable_2[$command_no], $file_name);
	array_push($instances[$key],
										$variable_1[$command_no]."_agent_ins"
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]."_agent"
						);
}
function agent_create(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	array_push($file_name,
								$variable_1[$command_no]."_agent.sv",
								$variable_1[$command_no]."_driver.sv",
								$variable_1[$command_no]."_monitor.sv",
								$variable_1[$command_no]."_sequencer.sv",
								$variable_1[$command_no]."_sequence.sv",
								$variable_1[$command_no]."_sequence_item.sv"
						);
	array_push($class,
								$variable_1[$command_no]."_agent",
								$variable_1[$command_no]."_driver",
								$variable_1[$command_no]."_monitor",
								$variable_1[$command_no]."_sequencer",
								$variable_1[$command_no]."_sequence",
								$variable_1[$command_no]."_trans"
						);
	array_push($type,
								"agent",
								"driver",
								"monitor",
								"sequencer",
								"sequence",
								"sequence_item"
						);
	array_push($instances,
										array($variable_1[$command_no]."_driver_ins",$variable_1[$command_no]."_monitor_ins",$variable_1[$command_no]."_sequencer_ins"),
										array($variable_1[$command_no]."_trans_ins"),
										array($variable_1[$command_no]."_trans_ins"),
										array($variable_1[$command_no]."_trans_ins"),
										array($variable_1[$command_no]."_trans_ins"),
										array("")
						);
	array_push($instance_class,
											array($variable_1[$command_no]."_driver",$variable_1[$command_no]."_monitor",$variable_1[$command_no]."_sequencer"),
											array($variable_1[$command_no]."_trans"),
											array($variable_1[$command_no]."_trans"),
											array($variable_1[$command_no]."_trans"),
											array($variable_1[$command_no]."_trans"),
											array("")
						);
	agent_ins_add();
}
function agent_ins_create(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	$key=array_search($variable_3[$command_no], $file_name);
	array_push($instances[$key],
										$variable_2[$command_no]
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]
						);
}
function driver_ins_add(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	$key=array_search($variable_1[$command_no]."_agent.sv", $file_name);
	array_push($instances[$key],
										$variable_2[$command_no]."_driver_ins"
						);
	array_push($instance_class[$key],
										$variable_2[$command_no]."_driver"
						);
}
function driver_create(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	array_push($file_name,
							$variable_2[$command_no]."_driver.sv"
						);
	array_push($class,
							$variable_2[$command_no]."_driver"
						);
	array_push($type,
							"driver"
						);
	array_push($instances,
							array($variable_2[$command_no]."_trans_ins")
						);
	array_push($instance_class,
							array($variable_2[$command_no]."_trans")
						);
	driver_ins_add();
}
function driver_ins_create(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	$key=array_search($variable_3[$command_no], $file_name);
	array_push($instances[$key],
										$variable_2[$command_no]."_driver_ins"
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]."_driver"
						);
}

function monitor_ins_add(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	$key=array_search($variable_2[$command_no], $file_name);
	array_push($instances[$key],
										$variable_1[$command_no]."_scb_ins"
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]."_scb"
						);
}
function monitor_create(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	array_push($file_name,
							$variable_1[$command_no]."_monitor.sv"
						);
	array_push($class,
							$variable_1[$command_no]."_monitor"
						);
	array_push($type,
							"monitor"
						);
	array_push($instances,
							array($variable_1[$command_no]."_trans_ins")
						);
	array_push($instance_class,
							array($variable_1[$command_no]."_trans")
						);
	monitor_ins_add();
}
function monitor_ins_create(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	$key=array_search($variable_2[$command_no], $file_name);
	array_push($instances[$key],
										$variable_1[$command_no]."_scb_ins"
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]."_scb"
						);
}
function sequencer_ins_add(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	$key=array_search($variable_2[$command_no], $file_name);
	array_push($instances[$key],
										$variable_1[$command_no]."_scb_ins"
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]."_scb"
						);
}
function sequencer_create(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	array_push($file_name,
							$variable_1[$command_no]."_seqeuncer.sv"
						);
	array_push($class,
							$variable_1[$command_no]."_seqeuncer"
						);
	array_push($type,
							"seqeuncer"
						);
	array_push($instances,
							array($variable_1[$command_no]."_trans_ins")
						);
	array_push($instance_class,
							array($variable_1[$command_no]."_trans")
						);
	sequencer_ins_add();
}
function sequencer_ins_create(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	$key=array_search($variable_2[$command_no], $file_name);
	array_push($instances[$key],
										$variable_1[$command_no]."_scb_ins"
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]."_scb"
						);
}
function new_seq_create(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	$key=array_search($variable_2[$command_no], $file_name);
	array_push($instances[$key],
										$variable_1[$command_no]."_scb_ins"
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]."_scb"
						);
}
function new_base_seq_create(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	array_push($file_name,
							$variable_1[$command_no]."_seqeunce.sv"
						);
	array_push($class,
							$variable_1[$command_no]."_seqeunce"
						);
	array_push($type,
							"seqeunce"
						);
	array_push($instances,
							array($variable_1[$command_no]."_trans_ins")
						);
	array_push($instance_class,
							array($variable_1[$command_no]."_trans")
						);
	$key=array_search($variable_2[$command_no], $file_name);
	array_push($instances[$key],
										$variable_1[$command_no]."_scb_ins"
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]."_scb"
						);

}
function new_test_create(){
	global $variable_1;
	global $variable_2;
	global $variable_3;
	global $variable_4;
	global $file_name;
	global $class;
	global $type;
	global $instances;
	global $instance_class;
	global $command_no;
	$variable_33=str_replace(".sv","",$variable_3[$command_no]);
	$variable_44=str_replace(".sv","",$variable_4[$command_no]);
	array_push($file_name,
							$variable_1[$command_no]
						);
	array_push($class,
							$variable_2[$command_no]
						);
	array_push($type,
							"test"
						);
	array_push($instances,
							array($variable_3[$command_no],$variable_4[$command_no])
						);
	array_push($instance_class,
							array($variable_33,$variable_44)
						);
	$key=array_search($variable_2[$command_no], $file_name);
	array_push($instances[$key],
										$variable_1[$command_no]."_scb_ins"
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]."_scb"
						);
}


tb_create();
$command_no++;
env_create();
$command_no++;
env_ins_create();
$command_no++;
scb_create();
$command_no++;
scb_ins_create();
$command_no++;
sub_create();
$command_no++;
sub_ins_create();
$command_no++;
agent_create();
$command_no++;
agent_ins_create();
$command_no++;
driver_create();
$command_no++;
driver_ins_create();


for ($x = 0; $x < sizeof($type); $x++) {
	switch($type[$x]){
    case "top":
        $options[$x]=array("no option available");
      break;
    case "base_test":
        $options[$x]=array("","add environment","add virtual sequence");
      break;
	  case "test":
        $options[$x]=array("","add environment","add virtual sequence");
     break;
    case "vsequencer":
        $options[$x]=array("","add sequencer");
      break;
    case "vsequence":
        $options[$x]=array("","add sequence");
      break;
    case "environment":
        $options[$x]=array("","add virtual sequence","add scoreboard","add subscriber","add agent");
      break;
    case "scoreboard":
        $options[$x]=array("","add sequence item");
      break;
    case "subscriber":
        $options[$x]=array("","add sequence item");
      break;
    case "agent":
        $options[$x]=array("","add driver","add monitor","add sequencer");
      break;
    case "driver":
        $options[$x]=array("","add sequence item");
      break;
    case "monitor":
        $options[$x]=array("","add sequence item");
      break;
    case "sequencer":
        $options[$x]=array("","add sequence item");
      break;
    case "sequence":
        $options[$x]=array("no option available");
      break;
    case "sequence_item":
        $options[$x]=array("no option available");
      break;
    case "interface_file":
        $options[$x]=array("no option available");
      break;
    default:
        $options[$x]=array("no option available");
				break;
	} 	
}
?>
<html>
	<head>
	<!-- <script src="classes1.js" type="text/javascript"></script> -->
	<script>
					var instance_list=<?php echo json_encode($instances)?>;
					var instance_class_list=<?php echo json_encode($instance_class)?>;
					function update_ins_class(ins,ins_class,form_no){	 
						var ins_name = document.getElementById(ins).value;
						var replaced= instance_class_list[form_no][instance_list[form_no].indexOf(ins_name)];
						document.getElementById(ins_class).value = replaced;
					}
	</script>

	</head>
	<body>
		<form action="" method="POST">
			<?php foreach ($file_name as $num) : ?>
				<input type="text" name="file_name<?= $formCount ?>" value="<?= htmlspecialchars($num)?>" placeholder="<?= htmlspecialchars($num) ?>" readonly />
				<input type="text" name="<?= htmlspecialchars($class[$formCount])?>" value="<?= htmlspecialchars($class[$formCount])?>" placeholder="<?= htmlspecialchars($class[$formCount])?>" readonly />
				<input type="text" name="<?= htmlspecialchars($type[$formCount])?>" value="<?= htmlspecialchars($type[$formCount])?>" placeholder="<?= htmlspecialchars($type[$formCount])?>" readonly />

			<select name="abc" id="instance<?= htmlspecialchars($formCount)?>" onchange="update_ins_class('instance<?= htmlspecialchars($formCount)?>','instance_class<?= htmlspecialchars($formCount)?>','<?= htmlspecialchars($formCount)?>')">
					<?php foreach ($instances[$formCount] as $num1) :?>
					<option value="<?= htmlspecialchars($num1)?>"><?= htmlspecialchars($num1)?></option>
				<?php endforeach ?>
				</select>
				
				<select name="def" id="instance_class<?= htmlspecialchars($formCount)?>" disabled>
				<?php foreach ($instance_class[$formCount] as $num1) :?>
					<option value="<?= htmlspecialchars($num1)?>"><?= htmlspecialchars($num1)?></option>
				<?php endforeach ?>
				</select>	
				
				<select name="ghi" Id="options<?= htmlspecialchars($formCount)?>">
				<?php foreach ($options[$formCount] as $num1) :?>
					<option value="<?= htmlspecialchars($num1)?>"><?= htmlspecialchars($num1)?></option>
				<?php endforeach ?>
				</select>	
				<input type="submit" name="submit<?= htmlspecialchars($formCount)?>" value="submit"/>

				</br>
				</br>
				<?php $formCount++; ?>
			<?php endforeach ?>
		</form>	
	</body>
</html>