

<?php
	$db_username="angryanon";
	$db_password="";
	$db_name="rtg_test_1_db";
	$host="angryanon-rtg_development_git-1070192";
	$port=3306;
	mysql_connect($host,$db_username,"")or die(mysql_error());
    mysql_select_db($db_name) or die ("Could not get Information from Server");
    $sql = "SELECT * FROM user_list";
        echo "shakerin";
    $query=mysql_query($sql);
	if(!$query){
		die('Invalid query: ' . mysql_error());
	}
	$num_of_result= mysql_num_rows($query);
    while($row = mysql_fetch_array($query, MYSQL_ASSOC)){
        echo "The ID is: " . $row['user_id'] . " and the Username is: " . $row['username'];
    }
    mysql_free_result($query);
	exit();

?>


