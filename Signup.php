<?php session_start(); ?>

<?php

$fn = $_REQUEST['fname'];
$ln = $_REQUEST['lname'];
$usn = $_REQUEST['usn'];
$dept = $_REQUEST['dept'];
$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];
$repass = $_REQUEST['repass'];
$type = $_REQUEST['type'];

if(isset($_REQUEST['submit']))
{


		 if($_REQUEST['pass'] == $_REQUEST['repass'])
	{
$var=mysql_connect("localhost","root","") or die ('not working');
$new=mysql_select_db("calendar",$var);

$a = "INSERT INTO `calendar`.`login` (`firstname`, `lastname`, `usn`, `department`, `username`, `password`,`type`) VALUES ('$fn', '$ln', '$usn', '$dept', '$user', '$pass', '$type')";
mysql_query($a) or die(mysql_error());
		
echo "<h1>Now You are Signed Up <a href='index.php'>Click Here</a> </h1>";
		
	}
	 
else
{
echo "<h1>Unsucceful Sign Up</h1>";
		}

}
?>

<html>
<head>
<title>Pes Calendars</title>
<link rel="shortcut icon" href="images/images-5.jpeg">
<style>

div.menu5
{
    /*width:500px;margin:0 auto;*//*Uncomment this line to make the menu center-aligned.*/
    text-align:center;
    background:#FFF;
    border:1px solid black;
    font-size:0;
	margin-top:0;
}

div.menu5 a
{
    display: inline-block;
    padding: 0 50px;
    background:#666;
    border:1px solid #666;
    color:#000;
    text-decoration:none;
    font: bold 12px Arial;
    line-height: 35px;
    margin-right:1px;
}

div.menu5 a:hover, div.menu5 a.current
{
    background:	#09C;
    color:#000;
}
</style>
<script>
function validate()
{
var password = document.signup.pass.value;
var user = document.signup.user.value;
var dept = document.signup.dept.value;

var repassword = document.signup.repass.value;
var usn = document.signup.usn.value;
var leng= password.length;	
var leng1= user.length;	

if(dept == '-- --')
{
	alert("Please Select Department");
      signup.dept.focus();

	}
if(leng < 6)
{
	
alert("Password Is Too Small");
      signup.pass.focus();

}

if(leng1 < 6)
{
	
alert("Username Is Too Small");
      signup.user.focus();

}

if(password!=repassword)
{
alert("Password Is Not Matching");
      signup.repass.focus();

	}
var new1 = (/^[0-9]{2}[A-Za-z]{4}[0-9]{4}$/); 
	if(new1.test(usn))
{

	}
	
	else
	{
alert("USN Invalid");
		      signup.usn.focus();

		}


}


</script>

</head>
<body font="Tahoma">
<body font="Tahoma" bgcolor="#33CCCC">
<center><h1><img src="images/images (6).jpg" width="550"></h1></center>
<center><h1><img src="images/images-1-1.jpeg"></h1></center>

<center><h4>Bangalore-560085</h4><b>
<div style="width:100%">
<div style="width:50%; float:left;" >
<br><br>
<br><br>

<img src="images/happy students.jpg" height="448px" width="725px" style="padding-top:13px">
</div>
<div style="width:50%; float:left" >

<center><h2>Sign Up</h2></center>
<br>
<fieldset style="background-color:#CCC;" >
<h2 align="right">Details&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</h2>
<p align="right">
<form method="post" name="signup">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type="radio" value="Student" name="type" required> Student &emsp;&emsp;&emsp;<input type="radio" value="Teacher" name="type" required> Teacher &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<br><br>
First Name :<font color="#FF0000">*</font> <input type="text" name="fname" required  autocomplete="off"> &emsp; &emsp; &emsp;&nbsp;&nbsp;
Last Name : <font color="#FF0000">*</font><input type="text" name="lname" required autocomplete="off"><br><br>

USN / STAFF ID :<font color="#FF0000">*</font>
  <input type="text" name="usn" required  id="usn"  autocomplete="off" placeholder="eg: 12BMSB6015">    
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;<br><br>
  Department : &emsp;<font color="#FF0000">*</font>
  <select name="dept" required="required">
    <option selected>-- --</option>
    <option>B.C.A</option>
    <option>B.B.M</option>
    <option>M.C.A</option>
    <option>M.B.A</option>
  </select>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
 &emsp;&emsp;&emsp;&emsp; 
  <br><br>
  Username : &emsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FF0000">*</font><input type="text" name="user" required autocomplete="off" placeholder="At least 6 Character">
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
  <br><br>
  Password : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&ensp;<font color="#FF0000">*</font><input type="password" name="pass" required placeholder="At least 6 Characters"  style="width:150px;">
  &emsp;&nbsp;&nbsp;Re - Password :<font color="#FF0000">*</font><input type="password" name="repass" required placeholder="At least 6 Characters" style="width:150px;"><input type="button" onMouseMove="validate()" style="background:#CCC; width:30px; height:35px; border:none;">
 
  <br><br>
  <input type="submit" name="submit" value="Submit"  > &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
</p>
<br><br>

</fieldset>
</form>
</b>
</div>
</div>

<div class="menu5" style="width:100%; float:left;">

	<center>
    <a href="index.php" >Home</a>
        </center></div>
</div>
</body>
</html>

