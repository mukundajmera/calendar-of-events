<?php
error_reporting(0);
$var=mysql_connect("localhost","root","") or die ('not working');
$new=mysql_select_db("calendar",$var);



?>


<html>
<head>
<title>Pes Calender </title>
<script>
function goLastMonth(month, year){
if(month == 1) {
--year;
month = 13;
}
--month
var monthstring= ""+month+"";
var monthlength = monthstring.length;
if(monthlength <=1){
monthstring = "0" + monthstring;
}
document.location.href ="<?php $_SERVER['PHP_SELF'];?>?month="+monthstring+"&year="+year;
}
function goNextMonth(month, year){
if(month == 12) {
++year;
month = 0;
}
++month
var monthstring= ""+month+"";
var monthlength = monthstring.length;
if(monthlength <=1){
monthstring = "0" + monthstring;
}
document.location.href ="<?php $_SERVER['PHP_SELF'];?>?month="+monthstring+"&year="+year;
}
</script>
<style>
.today{
background-color: #00ff00;
}
.event{
background-color: #FF8080;
}
</style>

<link rel="shortcut icon" href="../images/images-5.jpeg">

</head>



<body bgcolor="#FFCC99" alink="#0033FF" vlink="#0033FF" link="#0033FF">
<?php
if (isset($_GET['day'])){
$day = $_GET['day'];
} else {
$day = date("j");
}
if(isset($_GET['month'])){
$month = $_GET['month'];
} else {
$month = date("n");
}
if(isset($_GET['year'])){
$year = $_GET['year'];
}else{
$year = date("Y");
}
$currentTimeStamp = strtotime( "$day-$month-$year");
$monthName = date("F", $currentTimeStamp);
$numDays = date("t", $currentTimeStamp);
$counter = 0;
?>

<center>
<h1>Add Events</h1>
<?php


	if(isset($_GET['add']))
	{

	if($_POST['txtid']=="" OR $_POST['txttitle']=="")
	{
	$errormsg='Missing fields';
	}
		$event=$_POST['txtid'];
/*	$pattern='/^PES Universuty[0-9]{4}$/';
	
	if((!preg_match($pattern,$event)))
	{
	$errormsg1='Enter a valid Event ID. (PESIT****) (* :- 0-9)';
	}
*/
		$eventid =$_POST['txtid'];
		$title =$_POST['txttitle'];
		$eventfor=$_POST['eventfor'];
		$eventdate = $year."-".$month."-".$day;
		$eventtype=$_POST['type'];
		$sem=$_POST['sem'];
		$dept1=$_POST['dept1'];
		$dept2=$_POST['dept2'];
		$dept3=$_POST['dept3'];
		$dept4=$_POST['dept4'];
		if($dept1!=NULL)
			{	$dept=$dept1;}
		if($dept2!=NULL)
			{	$dept=$dept2;}
		if($dept3!=NULL)
			{	$dept=$dept3;}
		if($dept4!=NULL)
			{	$dept=$dept4;}
		if($dept1 != NULL && $dept2 != NULL)
		{
			$dept=$dept1 .','.$dept2;
			}
		if($dept2 != NULL && $dept3 != NULL)
		{
			$dept=$dept2 .','.$dept3;
			}
		if($dept3 != NULL && $dept4 != NULL)
		{
			$dept=$dept3 .','.$dept4;
			}
		if($dept1 != NULL && $dept3 != NULL)
		{
			$dept=$dept1 .','.$dept3;
			}
		if($dept2 != NULL && $dept4 != NULL)
		{
			$dept=$dept2 .','.$dept4;
			}
		if($dept1 != NULL && $dept4 != NULL)
		{
			$dept=$dept1 .','.$dept4;
			}
		if($dept1 != NULL && $dept2 != NULL && $dept3 != NULL )
		{
			$dept=$dept1 .','.$dept2 .','.$dept3;
			
			}
		
		if($dept2 != NULL && $dept3 != NULL && $dept4 != NULL )
		{
			$dept=$dept2 .','.$dept3 .','.$dept4;
			
			}
		if($dept3 != NULL && $dept4 != NULL && $dept1 != NULL )
		{
			$dept=$dept1 .','.$dept3 .','.$dept4;
			
			}
		if($dept1 != NULL && $dept2 != NULL && $dept4 != NULL )
		{
			$dept=$dept1 .','.$dept2 .','.$dept4;
			
			}
		
		if($dept1 != NULL && $dept2 != NULL && $dept3 != NULL && $dept4 != NULL )
		{ $dept = 'All';
			
			}
			
		
		
		
if($errormsg=="" AND $errormsg1=="")
{

$sqlinsert = "INSERT into eventcalendar VALUES('$eventid','$title','$eventdate','$eventfor','$eventtype','$sem','$dept')";
		$resultinginsert = mysql_query($sqlinsert);
		
		if($resultinginsert)
		{
		echo "<font color='green'><b>Event added Successfully ! </b></font>";
		}
		else
		{
		echo "<font color='red'><b>Event creation Unsuccessful</b></font>";
		}
}
else
{
	echo "<font color='red'>Enter Proper Values</font>";
}
	}
?>






<table border='1'>
<tr>
<td><input style='width:50px;' type='button' value='<'name='previousbutton' onclick ="goLastMonth(<?php echo $month.",".$year?>)"></td>
<td colspan='5'><?php echo $monthName.", ".$year; ?></td>
<td><input style='width:50px;' type='button' value='>'name='nextbutton' onclick ="goNextMonth(<?php echo $month.",".$year?>)"></td>
</tr>
<tr>
<td width='50px'>Sun</td>
<td width='50px'>Mon</td>
<td width='50px'>Tue</td>
<td width='50px'>Wed</td>
<td width='50px'>Thu</td>
<td width='50px'>Fri</td>
<td width='50px'>Sat</td>
</tr>
<?php
echo "<tr>";
for($i = 1; $i < $numDays+1; $i++, $counter++)
{
$timeStamp = strtotime("$year-$month-$i");
if($i == 1) 
	{
$firstDay = date("w", $timeStamp);
for($j = 0; $j < $firstDay; $j++, $counter++)
		 {
			echo "<td>&nbsp;</td>";
		 }
	}
		if($counter % 7 == 0)
		 {
		echo"</tr><tr>";
		 }
$monthstring = $month;
$monthlength = strlen($monthstring);
$daystring = $i;
$daylength = strlen($daystring);


if($monthlength <= 1)
		{
		$monthstring = "0".$monthstring;
		}

if($daylength <=1)
		{
		$daystring = "0".$daystring;
		}

echo "<td align='center'><a href='".$_SERVER['PHP_SELF']."?month=".$monthstring."&day=".$daystring."&year=".$year."&v=true'>".$i."</a></td>";

$todaysDate = date("m/d/Y");
$dateToCompare = $monthstring. '/' . $daystring. '/' . $year;
echo "<td align='center' ";


}
echo "</tr>";
?>
</table>


<?php

if(isset($_GET['v'])) 
{

echo "<hr>";
echo "<a href='".$_SERVER['PHP_SELF']."?month=".$month."&day=".$day."&year=".$year."&v=true&f=true'>Add Event</a>";

	if(isset($_GET['f']))
	 	{
		include("eventform.php");
		}
}
?>

<br>

<form method="get" action="dispcal.PHP"><font color='red'><b>
<?php
	if($errormsg!="")
	echo $errormsg;
	else if($errormsg1!="")
	echo $errormsg1;
?>
</b></font>
 <br>   <button type="submit">Generate Calendar</button>
</form>

<a href="http://localhost/calendar/admin1.php">Back</a>
<br>
<br>
<marquee >
<img src="../images/download.jpg" height="150">&emsp;&emsp;
<img src="../images/images (1).jpg" height="150">&emsp;&emsp;
<img src="../images/images (2).jpg" height="150">&emsp;&emsp;
<img src="../images/images (3).jpg" height="150">
</marquee>
</center>

</body>
</html> 