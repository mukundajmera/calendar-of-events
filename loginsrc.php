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
	$a = "SELECT `password` FROM `login` WHERE `username` LIKE '$user' ";
	$e = mysql_query($a) or die(mysql_error());
	while($p = mysql_fetch_row($e))
	{
		$f=$p[0];
	}
	if($pass == $f) 
	{ 
$aaa = "SELECT * FROM `login` WHERE `username` LIKE '$user'";
$ar = mysql_query($aaa);
$_SESSION ['username']= $username;

while ( $b= mysql_fetch_array($ar))
{
	$dept = $b['3'];
	$type = $b['6'];
}
		if($type == 'Teacher')
		{
		if($dept == 'B.C.A')
		{
		header("location:BCA2.php");
		}
	else	if($dept == 'B.B.M')
		{
		header("location:BBM2.php");
		}
	else	if($dept == 'M.C.A')
		{
		header("location:MCA2.php");
		}
	else	if($dept == 'M.B.A')
		{
		header("location:MBA2.php");
		}
	
			
			}
		
else
{


		if($dept == 'B.C.A')
		{
		header("location:BCA1.php");
		}
	else	if($dept == 'B.B.M')
		{
		header("location:BBM1.php");
		}
	else	if($dept == 'M.C.A')
		{
		header("location:MCA1.php");
		}
	else	if($dept == 'M.B.A')
		{
		header("location:MBA1.php");
		}
	}
	}
	else
	{
 		echo "Login Fail";
			}
	
}

?>
</body>
</html>