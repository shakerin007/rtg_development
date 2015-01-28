<?php 
	$formCount=0;   
	$instance_count=0;
	$command_no=0;
	$whole_tb="create whole testbench";
	$new_env= "create new environment class";
	$add_env="add new environment instance";
	$new_scb="create new scoreboard class";
	$add_scb="add new scoreboard instance";
	$new_sub="create new subscriber class";
	$add_sub="add new subscriber instance";
	$new_agent="create new agent class";
	$add_agent="add new agent instance";
	$new_drv="create new driver class";
	$add_drv="add new driver instance";
	$new_mon="create new monitor class";
	$add_mon="add new monitor instance";
	$new_sqr="create new sequencer class";
	$add_sqr="add new sequencer instance";
	$add_seq="create new sequence class";
	$new_seq="create new base sequence";
	$new_test="create new test";
	session_start();
	$sequencial_commands=array();
	$variable_1=array();
	$variable_2=array();
	$variable_3=array();
	$variable_4=array();
	
	$sequencial_commands=$_SESSION['sequencial_command'];
	$variable_1=$_SESSION['variable_01'];
	$variable_2=$_SESSION['variable_02'];
	$variable_3=$_SESSION['variable_03'];
	$variable_4=$_SESSION['variable_04'];

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
								$variable_1[$command_no]."_sbr",
								$variable_1[$command_no]."_agent",
								$variable_1[$command_no]."_driver",
								$variable_1[$command_no]."_monitor",
								$variable_1[$command_no]."_sequencer",
								array($variable_1[$command_no]."_sequence"),
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
										array($variable_1[$command_no]."_vsequencer_ins",$variable_1[$command_no]."_scb_ins",$variable_1[$command_no]."_sub_ins",$variable_1[$command_no]."_agent_ins"),
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
											array($variable_1[$command_no]."_vsequencer",$variable_1[$command_no]."_scb",$variable_1[$command_no]."_sbr",$variable_1[$command_no]."_agent"),
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
								$variable_1[$command_no]."_sbr",
								$variable_1[$command_no]."_agent",
								$variable_1[$command_no]."_driver",
								$variable_1[$command_no]."_monitor",
								$variable_1[$command_no]."_sequencer",
								array($variable_1[$command_no]."_sequence"),
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
										array($variable_1[$command_no]."_vsequencer_ins",$variable_1[$command_no]."_scb_ins",$variable_1[$command_no]."_sub_ins",$variable_1[$command_no]."_agent_ins"),
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
											array($variable_1[$command_no]."_vsequencer",$variable_1[$command_no]."_scb",$variable_1[$command_no]."_sbr",$variable_1[$command_no]."_agent"),
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
										$variable_1[$command_no]."_sub_ins"
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]."_sbr"
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
								array($variable_1[$command_no]."_sequence"),
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
										$variable_2[$command_no]
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]
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
										$variable_1[$command_no]."_monitor_ins"
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]."_monitor"
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
	$key=array_search($variable_3[$command_no]."_agent.sv", $file_name);
	array_push($instances[$key],
										$variable_2[$command_no]
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]."_monitor"
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
	$key=array_search($variable_3[$command_no], $file_name);
	array_push($instances[$key],
										$variable_2[$command_no]
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]
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
							array($variable_4[$command_no]."_ins")
						);
	array_push($instance_class,
							array($variable_4[$command_no])
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
	$key=array_search($variable_3[$command_no], $file_name);
	array_push($instances[$key],
										$variable_2[$command_no]
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]
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

	array_push($class[$key],
										$variable_1[$command_no]."_sequence"
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
							array($variable_1[$command_no]."_seqeunce")
						);
	array_push($type,
							"sequence"
						);
	array_push($instances,
							array($variable_3[$command_no]."_ins")
						);
	array_push($instance_class,
							array($variable_3[$command_no])
						);
	$key=array_search($variable_4[$command_no], $file_name);
	array_push($instances[$key],
										$variable_1[$command_no]."_sequence_ins"
						);
	array_push($instance_class[$key],
										$variable_1[$command_no]."_sequence"
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
							array($variable_3[$command_no]."_ins",$variable_4[$command_no]."_ins")
						);
	array_push($instance_class,
							array($variable_3[$command_no],$variable_4[$command_no])
						);
}


for($command_no=0;$command_no < sizeof($sequencial_commands); $command_no++){
	switch($sequencial_commands[$command_no]){
		case $whole_tb:
			  	tb_create();
			  	break;
		case $new_env:		
				env_create();
				break;
		case $add_env:
				env_ins_create();
				break;
		case $new_scb:
				scb_create();
				break;
		case $add_scb:
				scb_ins_create();
				break;
		case $new_sub:
				sub_create();
				break;
		case $add_sub:
				sub_ins_create();
				break;
		case $new_agent:
				agent_create();
				break;
		case $add_agent:
				agent_ins_create();
				break;
		case $new_drv:
				driver_create();
				break;
		case $add_drv:
				driver_ins_create();
				break;
		case $new_mon:
				monitor_create();
				break;
		case $add_mon:
				monitor_ins_create();
				break;
		case $new_sqr:
				sequencer_create();
				break;
		case $add_sqr:
				sequencer_ins_create();
				break;
		case $add_seq:
				new_seq_create();
				break;
		case $new_seq:
				new_base_seq_create();
				break;
		case $new_test:
				new_test_create();
				break;
		default:
				break;
	}
}
for($x = 0; $x < sizeof($type); $x++){
	switch($type[$x]){
    case "top":
        $options[$x]=array("no option available");
      break;
    case "base_test":
        $options[$x]=array("",$add_env);
      break;
	  case "test":
        $options[$x]=array("",$add_env);
     break;
    case "vsequencer":
        $options[$x]=array("no option available");
      break;
    case "vsequence":
        $options[$x]=array("no option available");
      break;
    case "environment":
        $options[$x]=array("",$add_scb,$add_sub,$add_agent);
      break;
    case "scoreboard":
        $options[$x]=array("no option available");
      break;
    case "subscriber":
        $options[$x]=array("no option available");
      break;
    case "agent":
        $options[$x]=array("",$add_drv,$add_mon,$add_sqr);
      break;
    case "driver":
        $options[$x]=array("no option available");
      break;
    case "monitor":
        $options[$x]=array("no option available");
      break;
    case "sequencer":
        $options[$x]=array("no option available");
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
 <script src="classes1.js" type="text/javascript"></script> 
<script>
					var instance_list=<?php  echo json_encode($instances) ?>;
					var instance_class_list=<?php echo json_encode($instance_class)?>;
					function update_ins_class(ins,ins_class,form_no){	 
						var ins_name = document.getElementById(ins).value;
						var replaced= instance_class_list[form_no][instance_list[form_no].indexOf(ins_name)];
						document.getElementById(ins_class).value = replaced;
					}
	</script>
	<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
		<form action="" method="POST">
			<?php foreach ($file_name as $num) : ?>
				<input type="text" name="file_name<?= $formCount ?>" value="<?= htmlspecialchars($num)?>" placeholder="<?= htmlspecialchars($num) ?>" readonly />
				<?php if($type[$formCount] != "sequence"){  ?>
				<input type="text" name="<?= htmlspecialchars($class[$formCount])?>" value="<?= htmlspecialchars($class[$formCount])?>" placeholder="<?= htmlspecialchars($class[$formCount])?>" readonly />
				<?php } else { ?>
					<select name="seq" Id="class<?= htmlspecialchars($formCount)?>">
					<?php foreach ($class[$formCount] as $num1) :?>
						<option value="<?= htmlspecialchars($num1)?>"><?= htmlspecialchars($num1)?></option>
					<?php endforeach ?>
					</select>
				<?php	} ?> 
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
				
				<select name="Add Instance" Id="options<?= htmlspecialchars($formCount)?>">
				<?php foreach ($options[$formCount] as $num1) :?>
					<option value="<?= htmlspecialchars($num1)?>"><?= htmlspecialchars($num1)?></option>
				<?php endforeach ?>
				</select>	
				<input type="button" Id="options<?= htmlspecialchars($formCount)?>_button" name="Add Instance" value="Add Instance" onclick="myFunction('placement<?= $formCount ?>','options<?= htmlspecialchars($formCount)?>','Add Instance')"/>
				<p Id="placement<?= $formCount ?>"></p>
				</br>
				</br>
				<?php $formCount++; ?>
			<?php endforeach ?>
		</form>	
	</body>
</html>
<?php echo "<a href='save_info.php'>Show List of Testbenches</a>"; ?>
<?php echo "<a href='logout.php'>Log Out</a>"; ?>