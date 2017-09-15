<?php session_start(); 
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


$qry="SELECT * FROM eventcalendar WHERE semester='Even' AND (eventfor='both' OR eventfor='faculty' ) AND dept='M.C.A' OR dept='All' AND semester='Even' OR dept='M.B.A,M.C.A' AND semester='Even' OR dept='B.B.M,M.C.A' AND semester='Even' OR dept='B.C.A,M.C.A' AND semester='Even' OR dept='B.C.A,M.B.M,M.C.A' AND semester='Even' OR dept='B.C.A,M.B.A,M.C.A' AND semester='Even' OR dept='B.B.M,M.B.A,M.C.A' AND semester='Even' order by eventdate asc";
$val=mysql_query($qry);
?>
<center> <h2 style="color:blue; text-decoration:underline;">Even Calendar</h2>

<table width="50%"  style="border:2px solid #8AB8E6; ">
<tr style="background-color:#5CADFF">
	<th>Event Name</th>
	<th>Date (Y-M-D)</th>
	
	</tr>
<?php

while($row = mysql_fetch_array($val))
  {
  echo "<tr >";
  echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['eventdate'] . "</td>";

  echo "</tr>";
  }
  ?>
</table>
</body>
</html>