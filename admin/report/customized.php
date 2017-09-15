<html>
<head> 
<link rel="shortcut icon" href="../../images/images-5.jpeg">
</head>
<body background="../../images/watermark.jpg">
<?php
$var=mysql_connect("localhost","root","") or die ('not working');
$new=mysql_select_db("calendar",$var);
$qry="select count(*) from eventcalendar";
$val=mysql_query($qry);
$result = mysql_fetch_array($val);


$qry1="select count(*) from eventcalendar where eventtype='national holidays'";
$val1=mysql_query($qry1);
$result1 = mysql_fetch_array($val1);



$qry2="select count(*) from eventcalendar where eventtype='fixed'";
$val2=mysql_query($qry2);
$result2 = mysql_fetch_array($val2);


$qry3="select count(*) from eventcalendar where eventtype='dynamic'";
$val3=mysql_query($qry3);
$result3 = mysql_fetch_array($val3);

$qry4="select count(*) from eventcalendar where (eventdate>'2014-01-01' AND eventdate<'2014-01-31')";
$val4=mysql_query($qry4);
$result4 = mysql_fetch_array($val4);


$qry5="select count(*) from eventcalendar where (eventdate>'2014-02-01' AND eventdate<'2014-02-29')";
$val5=mysql_query($qry5);
$result5 = mysql_fetch_array($val5);

$qry6="select count(*) from eventcalendar where (eventdate>'2014-03-01' AND eventdate<'2014-03-31')";
$val6=mysql_query($qry6);
$result6 = mysql_fetch_array($val6);


$qry7="select count(*) from eventcalendar where (eventdate>'2014-04-01' AND eventdate<'2014-04-30')";
$val7=mysql_query($qry7);
$result7 = mysql_fetch_array($val7);

$qry8="select count(*) from eventcalendar where (eventdate>'2014-07-01' AND eventdate<'2014-07-31')";
$val8=mysql_query($qry8);
$result8 = mysql_fetch_array($val8);

$qry9="select count(*) from eventcalendar where (eventdate>'2014-08-01' AND eventdate<'2014-08-31')";
$val9=mysql_query($qry9);
$result9 = mysql_fetch_array($val9);

$qry10="select count(*) from eventcalendar where (eventdate>'2014-09-01' AND eventdate<'2014-09-30')";
$val10=mysql_query($qry10);
$result10 = mysql_fetch_array($val10);


$qry11="select count(*) from eventcalendar where (eventdate>'2014-10-01' AND eventdate<'2014-10-31')";
$val11=mysql_query($qry11);
$result11 = mysql_fetch_array($val11);

?>




<center> <h2 style="color:blue; text-decoration:underline;">Customized Reports</h2>
</center>
<center>
<table width="50%"  style="border:2px solid #8AB8E6; "></center>


<tr>	<th align="left">Number of National Holidays:</th>
	<th><?php echo $result1[0]; ?> </th>
</tr>


<tr>	<th align="left">Number of Fixed Events:</th>
	<th><?php echo $result2[0]; ?> </th>
</tr>


<tr>	<th align="left">Number of Dynamic Events:</th>
	<th><?php echo $result3[0]; ?> </th>
</tr>


<tr><th align="left">Total number of events in database:</th>
	<th><?php echo $result[0]; ?> </th>
</tr>


<tr><th align="left">No of events in January 2014:</th>
	<th><?php echo $result4[0]; ?> </th>
</tr>

<tr><th align="left">No of events in Feburary 2014:</th>
	<th><?php echo $result5[0]; ?> </th>
</tr>

<tr><th align="left">No of events in March 2014:</th>
	<th><?php echo $result6[0]; ?> </th>
</tr>

<tr><th align="left">No of events in Aprial 2014:</th>
	<th><?php echo $result7[0]; ?> </th>
</tr>

<tr><th align="left">No of events in July 2014:</th>
	<th><?php echo $result8[0]; ?> </th>
</tr>

<tr><th align="left">No of events in August 2014:</th>
	<th><?php echo $result9[0]; ?> </th>
</tr>

<tr><th align="left">No of events in September 2014:</th>
	<th><?php echo $result10[0]; ?> </th>
</tr>


<tr><th align="left">No of events in October 2014:</th>
	<th><?php echo $result11[0]; ?> </th>
</tr>


</table><br><a href="../reports.php">Back</a>



</div>

</body>
</html>