<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
var usnid = '7t';
           re = /[0-9]/;
      //if(re.test(usnid.charAt(0)))
 if(usnid.charAt(0) == 7)
 { 
	if(re.test(usnid.charAt(1)))
 {
alert("This is a valid Usn number");
 }
else
{
alert("This is not a valid Usn number");
 
	}
	
	
	 }
/*function new()
{
var usnid = document.getElementById(usn);
alert(usnid);
var  s1 =(/^[0-9]{2}[A-Z]{4}[0-9]{4}$/);
//=usnid.search(/^[0-9]{2}[A-Z]{4}[0-9]{4}$/);
         
 if(s1.test(usnid))
{	alert("This is a valid Usn number");
    
	}
	else
	{alert("This is NOT a valid Usn number");
    
		}
}//s1=usn.search(/^[1-4][A-1Z]{2}[0-9]{2}[A-Z]{2}[0-9]{3}$/);
  /*  if(form.user.value == "") {
      alert("Error: Username cannot be blank!");
      form.user.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.user.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.user.focus();
      return false;
    }

      re = /[0-9]/;
      if(!re.test(form.user.value)) {
        alert("Error: Unsername must contain at least one number (0-9)!");
        form.user.focus();
        return false;
      }
      re = /[a-z]/ + /[A-Z]/;
      if(!re.test(form.user.value)) {
        alert("Error: Username must contain at least one letter (a-z)!");
        form.user.focus();
        return false;
      }

    if(form.pass.value != "" && form.pass.value == form.repass.value) {
      if(form.pass.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.pass.focus();
        return false;
      }
      if(form.pass.value == form.user.value) {
        alert("Error: Password must be different from Username!");
        form.pass.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.pass.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.pass.focus();
        return false;
      }
      re = /[a-z]/ + /[A-Z]/;
      if(!re.test(form.pass.value)) {
        alert("Error: password must contain at least one letter (a-z)!");
        form.pass.focus();
        return false;
      }


      
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.pass.focus();
      return false;
    }
*/
  </script>


</script>
</head>

<body>
</body>
</html>