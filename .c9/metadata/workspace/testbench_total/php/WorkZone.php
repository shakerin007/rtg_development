{"filter":false,"title":"WorkZone.php","tooltip":"/testbench_total/php/WorkZone.php","undoManager":{"mark":-1,"position":-1,"stack":[[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":6,"column":0},"end":{"row":6,"column":7}},"text":"</html>"},{"action":"removeLines","range":{"start":{"row":0,"column":0},"end":{"row":6,"column":0}},"nl":"\n","lines":["<html>","<body>","<?php ","echo \"Shakerin\";","?>","</body>    "]},{"action":"insertText","range":{"start":{"row":0,"column":0},"end":{"row":1,"column":0}},"text":"\n"},{"action":"insertLines","range":{"start":{"row":1,"column":0},"end":{"row":34,"column":0}},"lines":["<?php","$ip = \"127.0.0.1\";//getenv(\"REMOTE_ADDR\");","$port = \"3306\";","$user = \"angryanon\";","$DB = \"company\";","","","","$conn = mysql_connect(\"$ip:$port\", \"$user\",'',\"$DB\")or die(mysql_error());","mysql_select_db(\"$DB\");//or die(mysql_error());","$order = \"SELECT username,password FROM login\";","$result = mysql_query($order);","//$query=mysql_query(\"SELECT username FROM login\",\"$conn\");//or die(mysql_error());","","//while($row = mysql_fetch_array($query, MYSQL_ASSOC))","//{","//    echo \"EMP ID :{$row['username']}  <br> ","//","//         --------------------------------<br>\";","//} ","","while($data = mysql_fetch_row($result)){","    echo \"$data[0] $data[1] $data[2] \";","    ","}","","mysql_close();","","?>","<html>","<body>","    <h2>MYSQL </h2>","</body>"]},{"action":"insertText","range":{"start":{"row":34,"column":0},"end":{"row":34,"column":7}},"text":"</html>"}]}],[{"group":"doc","deltas":[{"action":"removeLines","range":{"start":{"row":8,"column":0},"end":{"row":9,"column":0}},"nl":"\n","lines":[""]}]}],[{"group":"doc","deltas":[{"action":"removeLines","range":{"start":{"row":7,"column":0},"end":{"row":8,"column":0}},"nl":"\n","lines":[""]}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":9,"column":10},"end":{"row":9,"column":16}},"text":"SELECT"},{"action":"insertText","range":{"start":{"row":9,"column":10},"end":{"row":9,"column":11}},"text":"I"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":11},"end":{"row":9,"column":12}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":9,"column":11},"end":{"row":9,"column":12}},"text":"n"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":11},"end":{"row":9,"column":12}},"text":"N"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":12},"end":{"row":9,"column":13}},"text":"S"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":13},"end":{"row":9,"column":14}},"text":"E"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":14},"end":{"row":9,"column":15}},"text":"R"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":15},"end":{"row":9,"column":16}},"text":"T"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":16},"end":{"row":9,"column":17}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":17},"end":{"row":9,"column":18}},"text":"I"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":18},"end":{"row":9,"column":19}},"text":"N"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":19},"end":{"row":9,"column":20}},"text":"T"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":20},"end":{"row":9,"column":21}},"text":"O"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":9,"column":22},"end":{"row":9,"column":50}},"text":"username,password FROM login"},{"action":"insertText","range":{"start":{"row":9,"column":22},"end":{"row":9,"column":36}},"text":"testbench_list"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":36},"end":{"row":9,"column":37}},"text":"("},{"action":"insertText","range":{"start":{"row":9,"column":37},"end":{"row":9,"column":38}},"text":")"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":37},"end":{"row":9,"column":44}},"text":"TB_name"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":44},"end":{"row":9,"column":45}},"text":","}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":45},"end":{"row":9,"column":57}},"text":"Date_Created"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":57},"end":{"row":9,"column":58}},"text":","}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":58},"end":{"row":9,"column":66}},"text":"location"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":67},"end":{"row":9,"column":68}},"text":" "}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":68},"end":{"row":9,"column":69}},"text":"V"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":69},"end":{"row":9,"column":70}},"text":"A"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":70},"end":{"row":9,"column":71}},"text":"L"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":71},"end":{"row":9,"column":72}},"text":"U"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":72},"end":{"row":9,"column":73}},"text":"E"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":73},"end":{"row":9,"column":74}},"text":"("}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":74},"end":{"row":9,"column":75}},"text":")"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":74},"end":{"row":9,"column":83}},"text":"getdate()"}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":74},"end":{"row":9,"column":75}},"text":","}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":84},"end":{"row":9,"column":85}},"text":","}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":75},"end":{"row":9,"column":76}},"text":"\""}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":85},"end":{"row":9,"column":87}},"text":"\"\""}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":9,"column":85},"end":{"row":9,"column":87}},"text":"\"\""}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":9,"column":85},"end":{"row":9,"column":87}},"text":"\"\""}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":9,"column":86},"end":{"row":9,"column":87}},"text":"\""}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":18,"column":0},"end":{"row":18,"column":4}},"text":"//} "},{"action":"removeLines","range":{"start":{"row":11,"column":0},"end":{"row":18,"column":0}},"nl":"\n","lines":["//$query=mysql_query(\"SELECT username FROM login\",\"$conn\");//or die(mysql_error());","","//while($row = mysql_fetch_array($query, MYSQL_ASSOC))","//{","//    echo \"EMP ID :{$row['username']}  <br> ","//","//         --------------------------------<br>\";"]}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":6,"column":7},"end":{"row":6,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1416422031872,"hash":"d86271fc2f110ebaaf86d4549cc077521d06ab7e"}