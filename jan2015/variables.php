<?php 
$file_name= array(
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
$class= array(
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
$type =	array(
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
$instances =array(
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
$instance_class=array(
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
										);
/***************** variables for environment *******************/
	$variable_1[$command_no]="uart2";
	$variable_2="uart_base_test.sv";
	$variable_3="";
	$variable_4="";
	
/********** generated variables from script ********************/
$file_name= array(
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
$class= array(
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
$type =	array(
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
$instances =array(
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
$instance_class=array(
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
/************************************* environment creation done **************************************************/




/***************** variables for scoreboard *******************/
	$variable_1[$command_no]="uart2";
	$variable_2="uart_env.sv";
	$variable_3="uart_trans";
	$variable_4="";
	
/********** generated variables from script ********************/
$file_name= array(
								$variable_1[$command_no]."_scb.sv"
							);
$class= array(
								$variable_1[$command_no]."_scb"
						);
$type =	array(
								"scoreboard"
						);	
$instances =array(
										array($variable_1[$command_no]."_trans_ins")
								);
$instance_class=array(
											array($variable_1[$command_no]."_trans")
										);
/*****************variables done scoreboard********************/




/***************** variables for subscriber *******************/
	$variable_1[$command_no]="uart2";
	$variable_2="uart_env.sv";
	$variable_3="";
	$variable_4="";
	
/********** generated variables from script ********************/
$file_name= array(
								$variable_1[$command_no]."_subscriber.sv"
							);
$class= array(
								$variable_1[$command_no]."_subscriber"
						);
$type =	array(
								"subscriber"
						);	
$instances =array(
										array($variable_1[$command_no]."_trans_ins")
								);
$instance_class=array(
											array($variable_1[$command_no]."_trans")
										);
/*****************variables done subscriber********************/





/***************** variables for agent *******************/
	$variable_1[$command_no]="uart3";
	$variable_2="uart2_env.sv";
	$variable_3="uart2";
	$variable_4="";
	
/********** generated variables from script ********************/
$file_name= array(
								$variable_1[$command_no]."_agent.sv",
								$variable_1[$command_no]."_driver.sv",
								$variable_1[$command_no]."_monitor.sv",
								$variable_1[$command_no]."_sequencer.sv",
								$variable_1[$command_no]."_sequence.sv",
								$variable_1[$command_no]."_sequence_item.sv"
							);
$class= array(
								$variable_1[$command_no]."_agent",
								$variable_1[$command_no]."_driver",
								$variable_1[$command_no]."_monitor",
								$variable_1[$command_no]."_sequencer",
								$variable_1[$command_no]."_sequence",
								$variable_1[$command_no]."_sequence_item"
						
						);
$type =	array(
								"agent",
								"driver",
								"monitor",
								"sequencer",
								"sequence",
								"sequence_item"
						);	
$instances =array(
										array($variable_1[$command_no]."_driver_ins",$variable_1[$command_no]."_monitor_ins",$variable_1[$command_no]."_sequencer_ins"),
										array($variable_1[$command_no]."_trans_ins"),
										array($variable_1[$command_no]."_trans_ins"),
										array($variable_1[$command_no]."_trans_ins"),
										array($variable_1[$command_no]."_trans_ins"),
										array("")
								);
$instance_class=array(
											array($variable_1[$command_no]."_driver",$variable_1[$command_no]."_monitor",$variable_1[$command_no]."_sequencer"),
											array($variable_1[$command_no]."_trans"),
											array($variable_1[$command_no]."_trans"),
											array($variable_1[$command_no]."_trans"),
											array($variable_1[$command_no]."_trans"),
											array("")
										);
/*****************variables done agent********************/




/***************** variables for driver *******************/
	$variable_1[$command_no]="uart5";
	$variable_2="uart2";
	$variable_3="";
	$variable_4="";
	
/********** generated variables from script ********************/
$file_name= array(
								$variable_1[$command_no]."_driver.sv"
							);
$class= array(
								$variable_1[$command_no]."_driver"
						);
$type =	array(
								"driver"
						);	
$instances =array(
										array($variable_1[$command_no]."_trans_ins")
								);
$instance_class=array(
											array($variable_1[$command_no]."_trans")
										);
/*****************variables done driver********************/




/***************** variables for monitor *******************/
	$variable_1[$command_no]="uart5";
	$variable_2="uart2_agent.sv";
	$variable_3="";
	$variable_4="";
	
/********** generated variables from script ********************/
$file_name= array(
								$variable_1[$command_no]."_monitor.sv"
							);
$class= array(
								$variable_1[$command_no]."_monitor"
						);
$type =	array(
								"monitor"
						);	
$instances =array(
										array($variable_1[$command_no]."_trans_ins")
								);
$instance_class=array(
											array($variable_1[$command_no]."_trans")
										);
/*****************variables done monitor********************/





/***************** variables for sequencer *******************/
	$variable_1[$command_no]="uart5";
	$variable_2="uart2";
	$variable_3="uart_env.sv";
	$variable_4="uart2_trans";
	
/********** generated variables from script ********************/
$file_name= array(
								$variable_1[$command_no]."_seqeuncer.sv"
							);
$class= array(
								$variable_1[$command_no]."_seqeuncer"
						);
$type =	array(
								"seqeuncer"
						);	
$instances =array(
										array($variable_1[$command_no]."_trans_ins")
								);
$instance_class=array(
											array($variable_1[$command_no]."_trans")
										);
/*****************variables done seqeuencer********************/


/***************** variables for new base sequence *******************/
	$variable_1[$command_no]="uart7";
	$variable_2="uart7_sequence.sv";
	$variable_3="uart_sequencer.sv";
	$variable_4="";
	
/********** generated variables from script ********************/
$file_name= array(
								$variable_1[$command_no]."_seqeunce.sv"
							);
$class= array(
								$variable_1[$command_no]."_seqeunce"
						);
$type =	array(
								"seqeunce"
						);	
$instances =array(
										array($variable_1[$command_no]."_trans_ins")
								);
$instance_class=array(
											array($variable_1[$command_no]."_trans")
										);
/*****************variables done new base sequence********************/


/***************** variables for new test *******************/
	$variable_1[$command_no]="uart_ran_test.sv";
	$variable_2="uart_ran_test";
	$variable_3="uart2_env.sv";
	$variable_4="uart2_vseq.sv";
	$variable_33=str_replace(".sv","",$variable_3);
	$variable_44=str_replace(".sv","",$variable_4);
	
/********** generated variables from script ********************/
$file_name= array(
								$variable_1[$command_no]
							);
$class= array(
								$variable_2
						);
$type =	array(
								"test"
						);	
						
$instances =array(
										array($variable_3,$variable_4)
								);
								
$instance_class=array(
										array($variable_33,$variable_44)
										);
/*****************variables done base test********************/


?>