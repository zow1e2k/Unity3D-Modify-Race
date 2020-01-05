<?PHP
$name = $_POST['nickname'];
$pass = $_POST['password'];

require_once('database.php');

$check_nick = mysql_query("SELECT * FROM users WHERE `nickname`='".$name."'");

$nickrows = mysql_num_rows($check_nick);

if ($nickrows == 0)
{
	die ("Username does not exist!");
}
else
{
	while($row = mysql_fetch_assoc($check_nick))
	{
		if ($pass == $row['password'])
		{
			die("Success!");
		}
		else
		{
			die("Error!");
		}
	}
}
?>