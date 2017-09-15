<?php
ob_start();
$var=mysql_connect("localhost","root","") or die ('not working');
$new=mysql_select_db("calendar",$var);

?>

<html>
<head>
<link rel="shortcut icon" href="../images/images-5.jpeg">
<title>
Delete Event
</title>
</head>
<body bgcolor="#009999">
<?php

 ?>


<br><br><br><br>

<center>
<h1>DELETE EVENTS</h1>
<hr style="color:green; width:700px;"></center>
<center>
<form method="POST">
Event ID: <input type="text" name="delete1" />
			<input type="submit" name="delete" value="Delete"/>
</form>
<?php 
if(isset($_REQUEST['delete']))
{
	$user=$_POST['delete1'];
	$qry="select * from eventcalendar WHERE `eventcalendar`.`eventid` = '$user'";
$e = mysql_query($qry) or die(mysql_error());
	while($p = mysql_fetch_row($e))
	{
		$f=$p[0];
	}
	
if($user = $f) 
{	echo "Successfull";
	$sql="DELETE FROM `calendar`.`eventcalendar` WHERE `eventcalendar`.`eventid` = '$user'";
	$res=mysql_query($sql);
}
	else
	echo "Invalid";
	
}
 ?>
<br>
<a href="../admin1.php">Back</a>

</center>

</div>

</body>
</html>