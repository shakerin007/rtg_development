	var whole_tb  = "create whole testbench";
	var new_env   = "create new environment class";
	var add_env   = "add new environment instance";
	var new_scb   = "create new scoreboard class";
	var add_scb   = "add new scoreboard instance";
	var new_sub   = "create new subscriber class";
	var add_sub   = "add new subscriber instance";
	var new_agent = "create new agent class";
	var add_agent = "add new agent instance";
	var new_drv   = "create new driver class";
	var add_drv   = "add new driver instance";
	var new_mon   = "create new monitor class";
	var add_mon   = "add new monitor instance";
	var new_sqr   = "create new sequencer class";
	var add_sqr   = "add new sequencer instance";
	var add_seq   = "create new sequence class";
	var new_seq   = "create new base sequence";
	var new_test  = "create new test";
  var php_file  ="insert.php";
function myFunction(dest,option,to_delete){
	var option_mf= document.getElementById(option).value;
	switch(option_mf){
		case whole_tb:
			var fieldset_n=create_form(php_file);
			fieldset_n.Id="new fieldset";
			var items=["brk","text","text","text","text","submit","brk"];
			var names_m=["","Enter Prefix","Top File Name","Base Test File Name","Test Class Name",whole_tb,""];
			var values_m=["","Enter Prefix","Top File Name","Base Test File Name","Test Class Name",whole_tb,""];
			var placeholders_m=["","Enter Prefix","Top File Name","Base Test File Name","Test Class Name",whole_tb,""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);
		break;	
		case new_env:
			var fieldset_n=create_form(php_file);
			var items=["brk","text","text","submit","brk"];
			var names_m=["","Enter Prefix","Base Test File Name",new_env,""];
			var values_m=["","Enter Prefix","Base Test File Name",new_env,""];
			var placeholders_m=["","Enter Prefix","Base Test File Name",new_env,""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
		  place_component(fieldset_n,dest);				
		break;
		case add_env:
			var fieldset_n=create_form(php_file);
			var items=["brk","text","text","text","submit","brk"];
			var names_m=["","Environment Class Name","Environment Instance Name","Base Test File Name",add_env,""];
			var values_m=["","Environment Class Name","Environment Instance Name","Base Test File Name",add_env,""];
			var placeholders_m=["","Environment Class Name","Environment Instance Name","Base Test File Name",add_env,""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
		  place_component(fieldset_n,dest);				
		break;
		case new_scb:
		  var fieldset_n=create_form(php_file);
			var items=["brk","text","text","submit","brk"];
			var names_m=["","Enter Prefix","Environment File Name",new_scb,""];
			var values_m=["","Enter Prefix","Environment File Name",new_scb,""];
			var placeholders_m=["","Enter Prefix","Environment File Name",new_scb,""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);
		break;
		case add_scb:
			var fieldset_n=create_form(php_file);
			var items=["brk","text","text","text","submit","brk"];
			var names_m=["","Scoreboard Class Name","Scoreboard Instance Name","Environment File Name",add_scb,""];
			var values_m=["","Scoreboard Class Name","Scoreboard Instance Name","Environment File Name",add_scb,""];
			var placeholders_m=["","Scoreboard Class Name","Scoreboard Instance Name","Environment File Name",add_scb,""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);
		break;
		case new_sub:
			var fieldset_n=create_form(php_file);
			var items=["brk","text","text","submit","brk"];
			var names_m=["","Enter Prefix","Environment File Name",new_sub,""];
			var values_m=["","Enter Prefix","Environment File Name",new_sub,""];
			var placeholders_m=["","Enter Prefix","Environment File Name",new_sub,""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);
		break;
		case add_sub:
			var fieldset_n=create_form(php_file);
			var items=["brk","text","text","text","submit","brk"];
			var names_m=["","Subscriber Class Name","Subscriber Instance Name","Environment File Name",add_sub,""];
			var values_m=["","Subscriber Class Name","Subscriber Instance Name","Environment File Name",add_sub,""];
			var placeholders_m=["","Subscriber Class Name","Subscriber Instance Name","Environment File Name",add_sub,""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);
		break;
		case new_agent:
			var fieldset_n=create_form(php_file);
			var items=["brk","text","text","text","submit","brk"];
			var names_m=["","Enter Prefix","Environment File Name","Prefix of Environment",new_agent,""];
			var values_m=["","Enter Prefix","Environment File Name","Prefix of Environment",new_agent,""];
			var placeholders_m=["","Enter Prefix","Environment File Name","Prefix of Environment",new_agent,""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);
		break;
		case add_agent:
			var fieldset_n=create_form(php_file);
			var items=["brk","text","text","text","submit","brk"];
			var names_m=["","Agent Class Name","Agent Instance Name","Environment File Name",add_agent,""];
			var values_m=["","Agent Class Name","Agent Instance Name","Environment File Name",add_agent,""];
			var placeholders_m=["","Agent Class Name","Agent Instance Name","Environment File Name",add_agent,""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);
		break;
		case new_drv:
			var fieldset_n=create_form(php_file);
			var items=["brk","text","text","submit","brk"];
			var names_m=["","Enter Prefix","Prefix of Agent",new_drv,""];
			var values_m=["","Enter Prefix","Prefix of Agent",new_drv,""];
			var placeholders_m=["","Enter Prefix","Prefix of Agent",new_drv,""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);
		break;
		case add_drv:
			var fieldset_n=create_form(php_file);
			var items=["brk","text","text","text","submit","brk"];
			var names_m=["","Driver Class Name","Driver Instance Name","Agent File Name",add_drv,""];
			var values_m=["","Driver Class Name","Driver Instance Name","Agent File Name",add_drv,""];
			var placeholders_m=["","Driver Class Name","Driver Instance Name","Agent File Name",add_drv,""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);
		break;
		case new_mon:
			var fieldset_n=create_form(php_file);
			var items=["brk","text","text","submit","brk"];
			var names_m=["","Enter Prefix","Agent File Name",new_mon,""];
			var values_m=["","Enter Prefix","Agent File Name",new_mon,""];
			var placeholders_m=["","Enter Prefix","Agent File Name",new_mon,""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);
		break;
		case add_mon:
			var fieldset_n=create_form(php_file);
			var items=["brk","text","text","text","submit","brk"];
			var names_m=["","Monitor Prefix","Monitor Instance Name","Agent Prefix",add_mon,""];
			var values_m=["","Monitor Prefix","Monitor Instance Name","Agent Prefix",add_mon,""];
			var placeholders_m=["","Monitor Prefix","Monitor Instance Name","Agent Prefix",add_mon,""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);
		break;
		case new_sqr:
			var fieldset_n=create_form(php_file);
			var items=["brk","text","text","text","text","submit","brk"];
			var names_m=["","Enter Prefix","Prefix of Agent","Environment File Name","Sequence Item Class Name",new_sqr,""];
			var values_m=["","Enter Prefix","Prefix of Agent","Environment File Name","Sequence Item Class Name",new_sqr,""];
			var placeholders_m=["","Enter Prefix","Prefix of Agent","Environment File Name","Sequence Item Class Name",new_sqr,""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);
		break;
		case add_sqr:
			var fieldset_n=create_form(php_file);
			var items=["brk","text","text","text","submit","brk"];
			var names_m=["","Sequencer Class Name","Sequencer Instance Name","Agent File Name",add_sqr,""];
			var values_m=["","Sequencer Class Name","Sequencer Instance Name","Agent File Name",add_sqr,""];
			var placeholders_m=["","Sequencer Class Name","Sequencer Instance Name","Agent File Name",add_sqr,""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);
		break;
		case add_seq:
			var fieldset_n=create_form(php_file);
			var items=["brk","text","text","text","text","submit","brk"];
			var names_m=["","Sequence Class Prefix","Base Sequence File name","Base Sequence Class","Parent Sequencer Class Name",add_seq,""];
			var values_m=["","Sequence Class Prefix","Base Sequence File name","Base Sequence Class","Parent Sequencer Class Name",add_seq,""];
			var placeholders_m=["","Sequence Class Prefix","Base Sequence File name","Base Sequence Class","Parent Sequencer Class Name",add_seq,""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);	
		break;
		case new_seq:
			var fieldset_n=create_form(php_file);
			var items=["brk","text","text","text","text","submit","brk"];
			var names_m=["","Sequence Class Prefix","Sequence File name","Parent Sequencer Class Name","Virtual Sequence File Name",new_seq,""];
			var values_m=["","Sequence Class Prefix","Sequence File name","Parent Sequencer Class Name","Virtual Sequence File Name",new_seq,""];
			var placeholders_m=["","Sequence Class Prefix","Sequence File name","Parent Sequencer Class Name","Virtual Sequence File Name",new_seq,""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);			
		break;
		case new_test:
			var fieldset_n=create_form(php_file);
			var items=["brk","text","text","text","text","submit","brk"];
			var names_m=["","Test File Name","Test Class Name","Environment Class Name","Virtual Sequence Class Name",new_test,""];
			var values_m=["","Test File Name","Test Class Name","Environment Class Name","Virtual Sequence Class Name",new_test,""];
			var placeholders_m=["","Test File Name","Test Class Name","Environment Class Name","Virtual Sequence Class Name",new_test,""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);		
		break;
		default:
			return;
		break;

	} 
var elem = document.getElementsByName(to_delete);
 for(var i=elem.length-1;i >= 0;i--){
        var childNode = elem[i];
            childNode.parentNode.removeChild(childNode);
}

}
function create_break_after(){
	var brk=document.createElement("br");
	return brk;
}
function create_input_text_after(name_t,placeholder_t){
	var text_input = document.createElement("input");
	text_input.type= 'text';
	text_input.name= name_t;
	text_input.placeholder=placeholder_t;		
	return text_input;
}
function create_input_password_after(name_t,placeholder_t){
	var pass_input = document.createElement("input");
	pass_input.type= 'password';
	pass_input.name= name_t;
	pass_input.placeholder=placeholder_t;	
	return pass_input;
}
function create_input_submit_after(name_t,value_t){
	var submit_input = document.createElement("input");
	submit_input.type= 'submit';
	submit_input.name= name_t;
	submit_input.value=value_t;	
	submit_input.onclick="myFunction('myButton')";
	return submit_input;
}
function create_input_radio_after(name_t,value_t){
	var radio_input = document.createElement("input");
	radio_input.type= 'radio';
	radio_input.name= name_t;
	radio_input.value=value_t;	
	var radio_tag= document.createElement("span");
	var radio_text=document.createTextNode(value_t); 
	radio_tag.appendChild(radio_text);	
	return [radio_input,radio_tag];
}
function create_input_checkbox_after(name_t,value_t){
	var checkbox_input = document.createElement("input");
	checkbox_input.type= 'checkbox';
	checkbox_input.name= name_t;
	checkbox_input.value=value_t;	
	var radio_tag= document.createElement("span");
	var radio_text=document.createTextNode(value_t); 
	radio_tag.appendChild(radio_text);
	return [checkbox_input,radio_tag];
}
function create_input_select_after(name_t,option_name){
	var select_var= document.createElement("select");
	select_var.name=name_t;
	for (i = 0; i < option_name.length; i++){
		var option_var=document.createElement("option");
		option_var.value=option_name[i];
		var option_text=document.createTextNode(option_name[i]);
		option_var.appendChild(option_text);
		select_var.appendChild(option_var);
	}
	return select_var;
}
function create_form_after(items,names,values,placeholders){
	var form_input=document.createElement("form");
	form_input.action="insert.php";
	form_input.method="POST";
	for (j = 0; j < items.length; j++){
		switch(items[j]){
			case "brk":
				form_input.appendChild(create_break_after());
			break;
			case "text":
				form_input.appendChild(create_input_text_after(names[j],placeholders[j]));	
			break;
			case "password":
				form_input.appendChild(create_input_password_after(names[j],placeholders[j]));
			break;
			case "submit":
				form_input.appendChild(create_input_submit_after(names[j],values[j]));
			break;
			case "radio":
				form_input.appendChild(create_input_radio_after(names[j],placeholders[j])[0]);
				form_input.appendChild(create_input_radio_after(names[j],placeholders[j])[1]);				
			break;
			case "checkbox":
				form_input.appendChild(create_input_checkbox_after(names[j],placeholders[j])[0]);
				form_input.appendChild(create_input_checkbox_after(names[j],placeholders[j])[1]);				
			break;
			case "select":
				form_input.appendChild(create_input_select_after(names[j],placeholders[j]));				
			break;
		} 	
	}
	return form_input;
}
function create_fieldset(){
	var fieldset_m=document.createElement("fieldset");
	return fieldset_m;
}
function create_form(php_file){
	var form_m=document.createElement("form");
	form_m.action="insert.php";
	form_m.method="POST";
	return form_m;
}
function place_component(item,dest){
	var destination= document.getElementById(dest);
	destination.appendChild(item);
}
