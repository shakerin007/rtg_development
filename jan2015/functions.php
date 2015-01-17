<?php
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
								$variable_1[$command_no]."_sequence_item",
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
											array(""),				
											array("")						
						)
	
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
								$variable_1[$command_no]."_sequence_item"					
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
	$key=array_search($variable_1[$command_no], $file_name);
	array_push($instances[$key],
										array($variable_1[$command_no]."_env_ins")
						);
	array_push($instance_class,
										array($variable_1[$command_no]."_env_ins")
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
							array($variable_1[$command_no]."_trans_ins")
						);
	array_push($instance_class,
							array($variable_1[$command_no]."_trans")
						);
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
							array($variable_1[$command_no]."_trans_ins")
						);
	array_push($instance_class,
							array($variable_1[$command_no]."_trans")
						);
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
								$variable_1[$command_no]."_sequence_item"
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
							$variable_1[$command_no]."_driver.sv"
						);
	array_push($class,
							$variable_1[$command_no]."_driver"
						);
	array_push($type,
							"driver"
						);
	array_push($instances,
							array($variable_1[$command_no]."_trans_ins")
						);
	array_push($instance_class,
							array($variable_1[$command_no]."_trans")
						);
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
}
?>