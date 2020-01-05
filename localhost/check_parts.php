<?PHP
$name = $_POST['nickname'];
require_once('database.php');
$check_toe = mysql_query("SELECT toe FROM users WHERE `nickname`='".$name."'");
$toe = mysql_fetch_array($check_toe);
$check_cash = mysql_query("SELECT cash FROM users WHERE `nickname`='".$name."'");
$cash = mysql_fetch_array($check_cash);
$check_RaceTimeMin = mysql_query("SELECT RaceTimeMin FROM users WHERE `nickname`='".$name."'");
$RaceTimeMin = mysql_fetch_array($check_RaceTimeMin);
$check_RaceTimeSec = mysql_query("SELECT RaceTimeSec FROM users WHERE `nickname`='".$name."'");
$RaceTimeSec = mysql_fetch_array($check_RaceTimeSec);
$check_hood = mysql_query("SELECT hood FROM carparts WHERE `nickname`='".$name."'");
$hood = mysql_fetch_array($check_hood);
$check_rBumper = mysql_query("SELECT rBumper FROM carparts WHERE `nickname`='".$name."'");
$rBumper = mysql_fetch_array($check_rBumper);
$check_fBumper = mysql_query("SELECT fBumper FROM carparts WHERE `nickname`='".$name."'");
$fBumper = mysql_fetch_array($check_fBumper);
$check_trunk = mysql_query("SELECT trunk FROM carparts WHERE `nickname`='".$name."'");
$trunk = mysql_fetch_array($check_trunk);
$check_rDoor = mysql_query("SELECT rDoor FROM carparts WHERE `nickname`='".$name."'");
$rDoor = mysql_fetch_array($check_rDoor);
$check_lDoor = mysql_query("SELECT lDoor FROM carparts WHERE `nickname`='".$name."'");
$lDoor = mysql_fetch_array($check_lDoor);
$check_rWindow = mysql_query("SELECT rWindow FROM carparts WHERE `nickname`='".$name."'");
$rWindow = mysql_fetch_array($check_rWindow);
$check_fWindow = mysql_query("SELECT fWindow FROM carparts WHERE `nickname`='".$name."'");
$fWindow = mysql_fetch_array($check_fWindow);
$check_wheel = mysql_query("SELECT wheel FROM carparts WHERE `nickname`='".$name."'");
$wheel = mysql_fetch_array($check_wheel);
$check_c_hood = mysql_query("SELECT hood FROM carcolor WHERE `nickname`='".$name."'");
$c_hood = mysql_fetch_array($check_c_hood);
$check_c_rBumper = mysql_query("SELECT rBumper FROM carcolor WHERE `nickname`='".$name."'");
$c_rBumper = mysql_fetch_array($check_c_rBumper);
$check_c_fBumper = mysql_query("SELECT fBumper FROM carcolor WHERE `nickname`='".$name."'");
$c_fBumper = mysql_fetch_array($check_c_fBumper);
$check_c_trunk = mysql_query("SELECT trunk FROM carcolor WHERE `nickname`='".$name."'");
$c_trunk = mysql_fetch_array($check_c_trunk);
$check_c_rDoor = mysql_query("SELECT rDoor FROM carcolor WHERE `nickname`='".$name."'");
$c_rDoor = mysql_fetch_array($check_c_rDoor);
$check_c_lDoor = mysql_query("SELECT lDoor FROM carcolor WHERE `nickname`='".$name."'");
$c_lDoor = mysql_fetch_array($check_c_lDoor);
$check_c_body = mysql_query("SELECT body FROM carcolor WHERE `nickname`='".$name."'");
$c_body = mysql_fetch_array($check_c_body);
$check_c_roof = mysql_query("SELECT roof FROM carcolor WHERE `nickname`='".$name."'");
$c_roof = mysql_fetch_array($check_c_roof);
echo $toe['toe']."*".$cash['cash']."*".$hood['hood']."*".$rBumper['rBumper']."*".$fBumper['fBumper']."*".$trunk['trunk']."*".$rDoor['rDoor']
."*".$lDoor['lDoor']."*".$rWindow['rWindow']."*".$fWindow['fWindow']."*".$wheel['wheel']."*".$c_hood['hood']."*".$c_rBumper['rBumper_color']."*".$c_fBumper['fBumper_color']
."*".$c_trunk['trunk_color']."*".$c_rDoor['rDoor_color']."*".$c_lDoor['lDoor_color']."*".$c_body['body_color']."*".$c_roof['roof_color']."*".$RaceTimeMin['RaceTimeMin']."*".$RaceTimeSec['RaceTimeSec'];
?>