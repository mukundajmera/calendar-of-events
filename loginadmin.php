<?php 
ob_start();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$var=mysql_connect("localhost","root","") or die ('not working');
$new=mysql_select_db("calendar",$var);


if(isset($_REQUEST['login']))
{
	$user = $_REQUEST['username'];
	$pass = $_REQUEST['password'];
	$a = "SELECT `password` FROM `admin` WHERE `username` LIKE '$user' ";
	$e = mysql_query($a) or die(mysql_error());
	while($p = mysql_fetch_row($e))
	{
		$f=$p[0];
	}
	if($pass == $f) 
	{ 


		header("location:admin1.php");
	}
	else
	{	
 		echo "Login Fail";
			}

}

?>
</body>
</html>