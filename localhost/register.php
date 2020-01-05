<?PHP
$name = $_POST['nickname'];
$pass = $_POST['password'];
$email = $_POST['mail'];

require_once('database.php');

$check = mysql_query("SELECT * FROM users WHERE `nickname`='".$name."'");

$numrows = mysql_num_rows($check);

if ($numrows == 0)
{
	
	$ins = mysql_query("INSERT INTO  users ( `nickname` ,  `password` ,  `mail` ) VALUES ( '".$name."' ,  '".$pass."' ,  '".$email."');");
	mysql_query("INSERT INTO carparts (`nickname`) VALUES ('".$name."');");
	mysql_query("INSERT INTO carcolor (`nickname`) VALUES ('".$name."');");
	if ($ins)
		die ("Succesfully Created User!");
	else
		die ("Error: " . mysql_error());
}
else
{
	die("Пользователь уже существует!");
}
?>