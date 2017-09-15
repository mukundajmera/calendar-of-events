<?php
$var=mysql_connect("localhost","root","") or die ('not working');
$new=mysql_select_db("calendar",$var);

$qry="select * from eventcalendar ORDER BY `eventdate` ASC";

$val=mysql_query($qry);
?>
<div style="width:100%;">
<div style="width:50%; float:left;">

<form name='eventform' method='POST' action="<?php $_SERVER['PHP_SELF']; ?>?month=<?php echo $month;?>&day=<?php echo $day;?>&year=<?php echo $year; ?>&v=true&add=true">

<table width='400px' border='0'>
<tr>

<td width='150px'>Event ID</td>
<td width='250px'><input type='text' name='txtid'</td>
</tr>

<td width='150px'>Title</td>
<td width='250px'><input type='text' name='txttitle'</td>
</tr>

<tr>
<td width='150px'>For</td>
<td width='250px'>
	<select name="eventfor">
	  <option value="both">Both</option>
	  <option value="student">Student</option>
 	  <option value="faculty">Faculty</option>
  
	</select>
</td>
</tr>

<tr>
<td width='150px'>Event Type</td>
<td width='250px'>
	<select name="type">
	  <option value="fixed">Fixed Events</option>
	  <option value="dynamic">Dynamic</option>
 	  <option value="national holidays">National 	Holidays</option>
  
	</select>
</td>
</tr>

<tr>
<td width='150px'>Semester</td>
<td width='250px'>
	<select name="sem">
	  <option value="Odd">Odd</option>
	  <option value="Even">Even</option>
 
  
	</select>
</td>
</tr>
<tr>
<td width='150px'>Department</td>
<td width='250px'>

	  <input type="checkbox" name="dept1"  value="B.C.A"/>B.C.A&emsp;
      <input type="checkbox" name="dept2"  value="B.B.M"/>B.B.M&emsp;<br />      <input type="checkbox" name="dept3"  value="M.B.A"/>M.B.A&emsp;
      <input type="checkbox" name="dept4"  value="M.C.A"/>M.C.A
</td>
</tr>

<tr>
<td colspan='2' align='center'><input type='submit' name='btnadd' value='Add Event'></td>
</tr>

</table>
</div>
<table>
<div style="width:50%;float:left ">
<table width="40%"  style="border:2px solid #8AB8E6; " align="center">
<tr style="background-color:#5CADFF">
	<th>Events </th>
    <th width="30%">Date</th>
	
<?php
while($row = mysql_fetch_array($val))
  {
  echo "<tr >";
  echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['eventdate'] . "</td>";
  echo "</tr>";
  }

?>
</table></form>
</div>
</div>