<html>
<head> 
<link rel="shortcut icon" href="../images/images-5.jpeg">
</head>
<body background="../images/watermark.jpg">
<?php
error_reporting(0);
$var=mysql_connect("localhost","root","") or die ('not working');
$new=mysql_select_db("calendar",$var);
$qry="select sum(total) from feedback where (dept = 'B.C.A')";
$val=mysql_query($qry);
$result1 = mysql_fetch_array($val);
//echo $result1[0];
$qry="select sum(total) from feedback where (dept = 'B.B.M')";
$val=mysql_query($qry);
$result2 = mysql_fetch_array($val);
//echo $result2[0];
$qry="select sum(total) from feedback where (dept = 'M.C.A')";
$val=mysql_query($qry);
$result3 = mysql_fetch_array($val);
//echo $result3[0];
$qry="select sum(total) from feedback where (dept = 'M.B.A')";
$val=mysql_query($qry);
$result4 = mysql_fetch_array($val);
//echo $result4[0];
$qry="select count(*) from feedback where (dept = 'B.C.A')";
$val=mysql_query($qry);
$result5 = mysql_fetch_array($val);
//echo $result5[0];
$qry="select count(*) from feedback where (dept = 'B.B.M')";
$val=mysql_query($qry);
$result6 = mysql_fetch_array($val);
$qry="select count(*) from feedback where (dept = 'M.C.A')";
$val=mysql_query($qry);
$result7 = mysql_fetch_array($val);
$qry="select count(*) from feedback where (dept = 'M.B.A')";
$val=mysql_query($qry);
$result8 = mysql_fetch_array($val);

$bca = ($result1[0]/($result5[0]*7))*100;
if($bca < 20)
$bca = '*';
else if($bca < 40)
$bca = '**';
else if($bca < 60)
$bca = '***';
else if($bca < 80)
$bca = '****';
else if($bca < 90)
$bca = '*****';

$bbm = ($result2[0]/($result6[0]*7))*100;
if($bbm < 20)
$bbm = '*';
else if($bbm < 40)
$bbm = '**';
else if($bbm < 60)
$bbm = '***';
else if($bbm < 80)
$bbm = '****';
else if($bbm < 90)
$bbm = '*****';

$mca = ($result3[0]/($result7[0]*7))*100;
if($mca < 20)
$mca = '*';
else if($mca < 40)
$mca = '**';
else if($mca < 60)
$mca = '***';
else if($mca < 80)
$mca = '****';
else if($mca < 90)
$mca = '*****';

$mba = ($result4[0]/($result8[0]*7))*100;
if($mba < 20)
$mba = '*';
else if($mba < 40)
$mba = '**';
else if($mba < 60)
$mba = '***';
else if($mba < 80)
$mba = '****';
else if($mba < 90)
$mba = '*****';


?>
<center> <h2 style="color:blue; text-decoration:underline;">Feedbacks</h2>

<center>
<table width="50%"  style="border:2px solid #8AB8E6; text-align:center; ">
<tr style="background-color:#5CADFF" >
	<th>Department</th>	
	<th>Review</th>	

	</tr>
<tr>
<td>
B.C.A
</td>
<td>
<?php echo $bca; ?></td>

</tr>
<tr>
<td>
B.B.M
</td>
<td>
<?php echo $bbm; ?></td>

</tr>
<tr>
<td>
M.C.A
</td>
<td>
<?php echo $mca; ?></td>

</tr>
<tr>
<td>
M.B.A
</td>
<td>
<?php echo $mba; ?></td>
<h3>
<table>
<tr>
<th>Stars</th></tr>
<tr><td>* = poor</td></tr> 
<tr><td>** = Below Average</td></tr> 
<tr><td>*** = Average </td></tr>
<tr><td>**** = Good </td></tr>
<tr><td>***** = Execelent </td></tr>
</table>
</h3>

</tr>

</table><br><a href="../admin1.php">Back</a>

</center>
</div>

</body>
</html>