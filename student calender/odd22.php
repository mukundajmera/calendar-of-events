<?php session_start(); ?>

<html>
<body background="rvtrans.jpg">
<?php

$var=mysql_connect("localhost","root","") or die ('not working');
$new=mysql_select_db("calendar",$var);

$user =  $_SESSION ['username'];
$aaa = "SELECT * FROM `login` WHERE `username` LIKE '$user'";
$ar = mysql_query($aaa);
while ( $b= mysql_fetch_array($ar))
{
	$dept = $b['3'];
}


$qry="SELECT * FROM eventcalendar WHERE semester='Odd' AND (eventfor='both' OR eventfor='faculty' ) AND dept='B.B.M' OR dept='All' AND semester='Odd' OR dept='B.B.M,M.B.A' AND semester='Odd' OR dept='B.C.A,B.B.M' AND semester='Odd' OR dept='B.B.M,M.C.A' AND semester='Odd' OR dept='B.C.A,B.B.M,M.B.A' AND semester='Odd' OR dept='B.C.A,B.B.M,M.C.A' AND semester='Odd' OR dept='B.B.M,M.B.A,M.C.A' AND semester='Odd' order by eventdate asc";
$val=mysql_query($qry);

?>
<center> <h2 style="color:blue; text-decoration:underline;">Odd Calendar</h2>

<center>
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
<br>
</center>
</div>

</body>
</html>