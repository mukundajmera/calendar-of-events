<html>
<head>
<link rel="shortcut icon" href="../images/images-5.jpeg">

</head>
<body background="../images/watermark.jpg">
<?php
$var=mysql_connect("localhost","root","") or die ('not working');
$new=mysql_select_db("calendar",$var);

$qry="SELECT * FROM eventcalendar WHERE semester='Odd' AND (eventfor='faculty' OR eventfor='both')  order by eventdate asc";

$val=mysql_query($qry);
?>



<center> <h2 style="color:blue; text-decoration:underline;">Odd Faculty Calendar </h2>

<center>
<table width="70%"  style="border:2px solid #8AB8E6; ">
<tr style="background-color:#5CADFF">
	<th>Event ID</th>
	<th>Event Name</th>
	<th>Event Date</th>
	<th>Meant For</th>
	<th>Event Type</th>
	<th>Semester</th>
    <th>Department</th>
	
</tr>

<?php
while($row = mysql_fetch_array($val))
  {
  echo "<tr >";
  echo "<td>" . $row['eventid'] . "</td>";
  echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['eventdate'] . "</td>";
  echo "<td>" . $row['eventfor'] . "</td>";
  echo "<td>" . $row['eventtype'] . "</td>";
  echo "<td>" . $row['semester'] . "</td>";
  echo "<td>" . $row['dept'] . "</td>";
  echo "</tr>";
  }
  ?>
 
</table>
<a href="../admin1.php">Back</a>
</center>
</div>

</body>
</html>