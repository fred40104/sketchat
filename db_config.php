<?php
$dbhost = '127.0.0.1';
$dbuser = 'sketchat';
$dbpass = 'sketchat666';
$dbname = 'sketchat';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
mysql_query("SET NAMES 'utf8'");
mysql_select_db($dbname);
?>
