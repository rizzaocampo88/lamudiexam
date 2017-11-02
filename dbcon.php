<?php

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "#RLOcampo88"; //run it to localhost using xampp server
$DB_name = "lamudi";

$SQLConn = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);

if($SQLConn->connect_errno)
{
die("ERROR : -> ".$SQLConn->connect_error);
}

?>
