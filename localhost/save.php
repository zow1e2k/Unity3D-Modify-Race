<?PHP
require_once('database.php');
$name = $_POST['nickname'];
$cash = $_POST['cash'];
$toe = $_POST['toe'];
$hood = $_POST['hood'];
$trunk = $_POST['trunk'];
$hood_c = $_POST['hood_c'];
$trunk_c = $_POST['trunk_c'];
$rBumper = $_POST['rBumper'];
$rBumper_c = $_POST['rBumper_c'];
$fBumper = $_POST['fBumper'];
$fBumper_c = $_POST['fBumper_c'];
$lDoor = $_POST['lDoor'];
$lDoor_c = $_POST['lDoor_c'];
$rDoor = $_POST['rDoor'];
$rDoor_c = $_POST['rDoor_c'];
$rWindow = $_POST['rWindow'];
$fWindow = $_POST['fWindow'];
$roof_c = $_POST['roof_c'];
$body_c = $_POST['body_c'];
$wheel = $_POST['wheel'];
$RaceTimeMin = $_POST['RaceTimeMin'];
$RaceTimeSec = $_POST['RaceTimeSec'];
$RaceTimeSec = intval($RaceTimeSec);
$RaceTimeMin = intval($RaceTimeMin);
$cash = intval($cash);
$toe = intval($toe);
$hood = intval($hood);
$trunk = intval($trunk);
$hood_c = intval($hood_c);
$trunk_c = intval($trunk_c);
$roof_c = intval($roof_c);
$body_c = intval($body_c);
$rBumper_c = intval($rBumper_c);
$fBumper_c = intval($fBumper_c);
$lDoor_c = intval($lDoor_c);
$rDoor_c = intval($rDoor_c);
$fWindow = intval($fWindow);
$rWindow = intval($rWindow);
$wheel = intval($wheel);
$ok1 = mysql_query("UPDATE `users` SET `cash`= '".$cash."', `toe`= '".$toe."',
`RaceTimeMin`= '".$RaceTimeMin."', `RaceTimeSec`= '".$RaceTimeSec."'
WHERE `nickname`= '".$name."'");
$ok2 = mysql_query("UPDATE `carparts` SET `hood`= '".$hood."', `trunk`= '".$trunk."', `rBumper`= '".$rBumper."', `fBumper`= '".$fBumper."',
`lDoor`= '".$lDoor."', `rDoor`= '".$rDoor."', `rWindow`= '".$rWindow."', `fWindow`= '".$fWindow."', `wheel`= '".$wheel."' WHERE `nickname`= '".$name."'");
$ok3 = mysql_query("UPDATE `carcolor` SET `hood`= '".$hood_c."', `trunk`= '".$trunk_c."', `body`= '".$body_c."', `roof`= '".$roof_c."',
`rBumper`= '".$rBumper_c."', `fBumper`= '".$fBumper_c."', `rDoor`= '".$rDoor_c."', `lDoor`= '".$lDoor_c."'
WHERE `nickname`= '".$name."'");
if ($ok1) echo "Success"; else die("Error");
if ($ok2) echo "Success"; else die("Error");
if ($ok3) die ("Success"); else die("Error");
?>