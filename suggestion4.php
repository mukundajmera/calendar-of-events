
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
if(isset($_REQUEST['1']))
{
$suggest = $_REQUEST['suggestion'];
$qry="INSERT INTO `calendar`.`suggestion` (`sno`, `suggestion`, `dept`) VALUES (NULL, '$suggest', 'M.B.A')";
$val=mysql_query($qry);

echo "<h1>Your Suggestion Is Succesfully Submited </h1>";
}
?>
<center> <h2 style="color:blue; text-decoration:underline;">Suggestion</h2>
<form method="get">
<textarea name="suggestion" style="height:80px; width:450px" required="required">
 
</textarea>
<br />

<input type="submit" name="1" value="Suggest" />
</form>
</center>
</body>
</html>