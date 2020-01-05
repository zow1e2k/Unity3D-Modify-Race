<?php
$db = mysql_connect('localhost', 'root', '') or ("Cannot connect: "  . mysql_error());

if (!$db) die('Could not connect: ' . mysql_error());
	
mysql_select_db('modifyrace', $db) or die ("Could not load the database: " . mysql_error());
?>