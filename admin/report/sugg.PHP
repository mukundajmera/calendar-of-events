<html>
<head> 
<link rel="shortcut icon" href="../../images/images-5.jpeg">
</head>
<body background="../../images/watermark.jpg">
<?php
$var=mysql_connect("localhost","root","") or die ('not working');
$new=mysql_select_db("calendar",$var);
$qry="select * from suggestion";
$val=mysql_query($qry);

?>
<center> <h2 style="color:blue; text-decoration:underline;">Suggestions</h2>

<center>
<table width="50%"  style="border:2px solid #8AB8E6; ">
<tr style="background-color:#5CADFF">
	<th>Suggestions</th>
	<th>Department</th>	

	</tr>
<?php
while($row = mysql_fetch_array($val))
  {
  echo "<tr >";
  echo "<td>" . $row['suggestion'] . "</td>";
  echo "<td>" . $row['dept'] . "</td>";

 ;
  echo "</tr>";
  }
  ?>
</table><br><a href="../../admin1.php">Back</a>

</center>

</div>

</body>
</html>