<?php
 
 $db['db_host'] = "localhost";
 $db['db_user'] = "thekenya_visa";
 $db['db_pass'] = "thekenya_visa";
 $db['db_name'] = "thekenya_visa";

    
foreach ($db as $key => $value) {
	define(strtoupper($key), $value);
}
$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);
// if ($connection) {
// 	echo "we are connected";
// }else{
// 	echo "database connection error";
// }


?>