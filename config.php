
<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "dox";
$conn = mysql_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn) {
	die('could not connect:' .mysql_error());
}
mysql_select_db('dox');


//mysql_close($conn);

?>
