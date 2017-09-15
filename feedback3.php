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
if(isset($_REQUEST['1']))
{
$q1 = $_REQUEST['q1'];
$q2 = $_REQUEST['q2'];
$q3 = $_REQUEST['q3'];
$q4 = $_REQUEST['q4'];
$q5 = $_REQUEST['q5'];
$q6 = $_REQUEST['q6'];
$q7 = $_REQUEST['q7'];
$total = 0;
if($q1 == 'Yes')
{
$total = $total + 1;
}
if($q2 == 'Yes')
{
$total = $total + 1;
}
if($q3 == 'Yes')
{
$total = $total + 1;
}
if($q4 == 'Yes')
{
$total = $total + 1;
}
if($q5 == 'Yes')
{
$total = $total + 1;
}
if($q6 == 'Yes')
{
$total = $total + 1;
}
if($q7 == 'Yes')
{
$total = $total + 1;
}

$qry="INSERT INTO `calendar`.`feedback` (`sno`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `dept`, `total`) VALUES (NULL, '$q1', '$q2', '$q3', '$q4' ,'$q5', '$q6', '$q7', 'M.B.A', '$total')";
$val=mysql_query($qry);

echo "<h1>Your Feedback Is Submitted</h1>";
		header("location:f1.php");

}
?>
<center> <h3 style="color:blue; text-decoration:underline;">Feeedback</h3>
<form method="get">
<fieldset style=" text-align:left; border:hidden; font-size:16px;" >
<strong>1) Are you satisfied with the functionalities of the E-Calendar ?
<br /><input type="radio" name="q1" value="Yes" required="required"/>
Yes &emsp;
<input type="radio" name="q1"  value="No" required="required"/>
No 
<br />
2) Have you found this site useful ?
<br /><input type="radio" name="q2" value="Yes" required="required"/>
Yes &emsp;
<input type="radio" name="q2"  value="No" required="required"/>
No 
<br />
3) Did you find our interface to be user-friendly ?
<br /><input type="radio" name="q3" value="Yes" required="required"/>
Yes &emsp;
<input type="radio" name="q3"  value="No" required="required"/>
No 
<br />
4) Do you think the college should conduct curriculum based seminars throughout the academic year ?
<br /><input type="radio" name="q4" value="Yes" required="required"/>
Yes &emsp;
<input type="radio" name="q4"  value="No" required="required"/>
No 
<br />
5) Do yo think the college should conduct more co-curricular activities throughout the academic year ?
<br /><input type="radio" name="q5" value="Yes" required="required"/>
Yes &emsp;
<input type="radio" name="q5"  value="No" required="required"/>
No 
<br />
6) Should the Exam be rescheduled from Nov-Dec to Oct- Nov ?
<br /><input type="radio" name="q6" value="Yes" required="required"/>
Yes &emsp;
<input type="radio" name="q6"  value="No" required="required"/>
No 
<br />
7) Should placements commence earlier.?
<br /><input type="radio" name="q7" value="Yes" required="required"/>
Yes &emsp;
<input type="radio" name="q7"  value="No" required="required"/>
No 
<br />
</strong>
</fieldset>
<br />

<input type="submit" name="1" value="submit" />
</form>
</center>
</body>
</html>