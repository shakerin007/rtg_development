function myFunction(dest,option){


	var option_mf= document.getElementById(option).value;
	switch(option_mf){
		case "Whole Testbench":
			var fieldset_n=create_form();
			fieldset_n.Id="new fieldset";
			var items=["brk","text","text","text","text","submit","brk"];
			var names_m=["","Enter Prefix","Top File Name","Base Test File Name","Test Class Name","Create Whole Testbench",""];
			var values_m=["","Enter Prefix","Top File Name","Base Test File Name","Test Class Name","Create Whole Testbench",""];
			var placeholders_m=["","Enter Prefix","Top File Name","Base Test File Name","Test Class Name","Create Whole Testbench",""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);
			break;	
		case "New Environment":
			var fieldset_n=create_form();
			var items=["brk","text","text","submit","brk"];
			var names_m=["","Enter Prefix","Base Test File Name","Create New Environment",""];
			var values_m=["","Enter Prefix","Base Test File Name","Create New Environment",""];
			var placeholders_m=["","Enter Prefix","Base Test File Name","Create New Environment",""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
		    place_component(fieldset_n,dest);				
		break;
		case "New Scoreboard":
		    var fieldset_n=create_form();
			var items=["brk","text","text","submit","brk"];
			var names_m=["","Enter Prefix","Environment File Name","Create New Scoreboard",""];
			var values_m=["","Enter Prefix","Environment File Name","Create New Scoreboard",""];
			var placeholders_m=["","Enter Prefix","Environment File Name","Create New Scoreboard",""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);
		break;
		case "New Subscriber":
			var fieldset_n=create_form();
			var items=["brk","text","text","submit","brk"];
			var names_m=["","Enter Prefix","Environment File Name","Create New Subscriber",""];
			var values_m=["","Enter Prefix","Environment File Name","Create New Subscriber",""];
			var placeholders_m=["","Enter Prefix","Environment File Name","Create New Subscriber",""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);
		break;
		case "New Agent":
			var fieldset_n=create_form();
			var items=["brk","text","text","text","submit","brk"];
			var names_m=["","Enter Prefix","Environment File Name","Prefix of Environment","Create New Agent",""];
			var values_m=["","Enter Prefix","Environment File Name","Prefix of Environment","Create New Agent",""];
			var placeholders_m=["","Enter Prefix","Environment File Name","Prefix of Environment","Create New Agent",""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);
		break;
		case "New Driver":
			var fieldset_n=create_form();
			var items=["brk","text","text","submit","brk"];
			var names_m=["","Enter Prefix","Prefix of Agent","Create New Driver",""];
			var values_m=["","Enter Prefix","Prefix of Agent","Create New Driver",""];
			var placeholders_m=["","Enter Prefix","Prefix of Agent","Create New Driver",""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);
		break;
		case "New Monitor":
			var fieldset_n=create_form();
			var items=["brk","text","text","submit","brk"];
			var names_m=["","Enter Prefix","Agent File Name","Create New Monitor",""];
			var values_m=["","Enter Prefix","Agent File Name","Create New Monitor",""];
			var placeholders_m=["","Enter Prefix","Agent File Name","Create New Monitor",""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);
		break;
		case "New Sequencer":
			var fieldset_n=create_form();
			var items=["brk","text","text","text","text","submit","brk"];
			var names_m=["","Enter Prefix","Prefix of Agent","Environment File Name","Sequence Item Class Name","Create New Sequencer",""];
			var values_m=["","Enter Prefix","Prefix of Agent","Environment File Name","Sequence Item Class Name","Create New Sequencer",""];
			var placeholders_m=["","Enter Prefix","Prefix of Agent","Environment File Name","Sequence Item Class Name","Create New Sequencer",""];
			fieldset_n.appendChild(create_form_after(items,names_m,values_m,placeholders_m));
			place_component(fieldset_n,dest);
		break;
		
		default:
			return;
		break;

	} 
var elem = document.getElementById('create');
elem.parentNode.removeChild(elem);

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
function create_form(){
	var form_m=document.createElement("form");
	return form_m;
}
function place_component(item,dest){
	var destination= document.getElementById(dest);
	destination.appendChild(item);
}