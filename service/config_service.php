<?php
$SETTINGS["hostname"] = '10.78.251.148';
$SETTINGS["mysql_user"] = 'root';
$SETTINGS["mysql_pass"] = 'password';
$SETTINGS["mysql_database"] = 'survey_system';

// $SETTINGS["hostname"] = 'localhost';
// $SETTINGS["mysql_user"] = 'khotdeec_root';
// $SETTINGS["mysql_pass"] = 'khotdee@1234';
// $SETTINGS["mysql_database"] = 'khotdeec_ceramic';

$SETTINGS["USERS"] = 'tb_Employee'; // this is the default table name that we used

$connection = mysql_connect($SETTINGS["hostname"], $SETTINGS["mysql_user"], $SETTINGS["mysql_pass"]) or die ('Unable to connect to MySQL server.<br ><br >Please make sure your MySQL login details are correct.');
$db = mysql_select_db($SETTINGS["mysql_database"], $connection) or die ('request "Unable to select database."');
mysql_query("SET NAMES UTF8");

?>


 