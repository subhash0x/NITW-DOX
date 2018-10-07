
<?php

require_once 'config.php'; 

$sql = 'create database dox';
$sql1 = 'use dox';
$sql2 = 'CREATE TABLE login( '.
      'name CHAR(20) NOT NULL, '.
      'email VARCHAR(20) NOT NULL, '.
      'password  VARCHAR(20) NOT NULL)';

 $sql3 =  'CREATE TABLE user( '.
      'file CHAR(20) NOT NULL, '.
      'type VARCHAR(20) NOT NULL, '.
      'size VARCHAR(20) NOT NULL, '.
      'photo VARCHAR(2000) NOT NULL, '.
       'subject VARCHAR(2000) NOT NULL, '.
        'branch VARCHAR(2000) NOT NULL, '.
      'tmp_name  VARCHAR(20) NOT NULL)';



$sql4 =  'CREATE TABLE registration( '.
      'name CHAR(20) NOT NULL, '.
      'email VARCHAR(20) NOT NULL, '.
      'password VARCHAR(20) NOT NULL)';



//$ret = mysql_query( $sql, $conn );
$ret = mysql_query($sql, $conn);
$ret1 = mysql_query($sql1, $conn);
$ret2 = mysql_query($sql3, $conn );
   echo "<br>";
      if(! $ret2 ) {
      die('Could not create database: <br>' . mysql_error());
   }
   else if(! $ret1 ) {
      die('Could not create database: <br>' . mysql_error());
   }
  
   echo "Database created successfully\n";
mysql_close($conn);

?>
