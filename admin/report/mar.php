<html>
<head> 
<link rel="shortcut icon" href="../../images/images-5.jpeg">
</head>
<body background="../../images/watermark.jpg">
<?php
$var=mysql_connect("localhost","root","") or die ('not working');
$new=mysql_select_db("calendar",$var);
$qry="select * from eventcalendar where (eventdate>'2014-03-01' AND eventdate<'2014-03-31') ORDER BY eventdate ASC";
$val=mysql_query($qry);

?>
<center> <h2 style="color:blue; text-decoration:underline;">March 2014 events</h2>

<center>
<table width="50%"  style="border:2px solid #8AB8E6; ">
<tr style="background-color:#5CADFF">
	<th>Event Name</th>
	<th>Date(Y-M-D)</th>

	</tr>
<?php
while($row = mysql_fetch_array($val))
  {
  echo "<tr >";
  echo "<td align='center'>" . $row['title'] . "</td>";
  echo "<td align='center'>" . $row['eventdate'] . "</td>";
  echo "</tr>";
  }
  ?>
</table><br><a href="../reports.php">Back</a>

</center>

</div>

</body>
</html>