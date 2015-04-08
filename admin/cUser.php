<title>Create User</title>
<?php
include_once("admin_temp.php");
 require_once("config.php");
 $con1 = mysql_pconnect($host, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
  mysql_select_db($database, $con1);
 ?>
 <script>
 
 
 
	
		function validate1(x,y,z)
		{
		var id=document.forms[x][z].value;
			var regexp = /[a-z]/gi;
			alert(id);
			
			if(id == "" || id == null)
			{
				
				
				document.getElementById(y).innerHTML="* Username should be filled";
				//document.getElementById('uname').value=null;
				document.getElementById(z).focus();
				return false;
			}
			if(isNaN(id))
			{
			document.getElementById(y).innerHTML="* Username should be numbered";
				document.getElementById(z).value=null;
				document.getElementById(z).focus();
				return false;
			}
			id=document.forms[x]["firstname"].value;
		if(id == "" || id == null)
			{
				
				
				document.getElementById(y).innerHTML="*Firstname should be filled";
				//document.getElementById('uname').value=null;
		
				return false;
			}
				id=document.forms[x]["lastname"].value;
		if(id == "" || id == null)
			{
				
				
				document.getElementById(y).innerHTML="*Lastname should be filled";
				//document.getElementById('uname').value=null;
				
				return false;
			}
				id=document.forms[x]["emailid"].value;
		if(id == "" || id == null)
			{
				
				
				document.getElementById(y).innerHTML="*Email should be filled";
				//document.getElementById('uname').value=null;
				//document.getElementById(z).focus();
				return false;
			}
				id=document.forms[x]["contact"].value;
		if(id == "" || id == null)
			{
				
				
				document.getElementById(y).innerHTML="*Contact should be filled";
				//document.getElementById('uname').value=null;
				//document.getElementById(z).focus();
				return false;
			}
			
			else
				{
					document.getElementById(y).innerHTML=" ";
				
				}
				
				return true;
		}
			function validate2(x,y,z)
		{
		var id=document.forms[x][z].value;
			var regexp = /[a-z]/gi;
			alert(id);
			
			if(id == "" || id == null)
			{
				
				
				document.getElementById(y).innerHTML="* Username should be filled";
				//document.getElementById('uname').value=null;
				document.getElementById(z).focus();
				return false;
			}
			if(isNaN(id))
			{
			document.getElementById(y).innerHTML="* Username should be numbered";
				document.getElementById(z).value=null;
				document.getElementById(z).focus();
				return false;
			}
			id=document.forms[x]["firstname1"].value;
		if(id == "" || id == null)
			{
				
				
				document.getElementById(y).innerHTML="*Firstname should be filled";
				//document.getElementById('uname').value=null;
		
				return false;
			}
				id=document.forms[x]["lastname1"].value;
		if(id == "" || id == null)
			{
				
				
				document.getElementById(y).innerHTML="*Lastname should be filled";
				//document.getElementById('uname').value=null;
				
				return false;
			}
				
			id=document.forms[x]["descrip"].value;
		if(id == "" || id == null)
			{
				
				
				document.getElementById(y).innerHTML="*Description should be filled";
				//document.getElementById('uname').value=null;
				//document.getElementById(z).focus();
				return false;
			}
			id=document.forms[x]["emailid1"].value;
		if(id == "" || id == null)
			{
				
				
				document.getElementById(y).innerHTML="*Email should be filled";
				//document.getElementById('uname').value=null;
				//document.getElementById(z).focus();
				return false;
			}
				id=document.forms[x]["contact1"].value;
		if(id == "" || id == null)
			{
				
				
				document.getElementById(y).innerHTML="*Contact should be filled";
				//document.getElementById('uname').value=null;
				//document.getElementById(z).focus();
				return false;
			}
			
			else
				{
					document.getElementById(y).innerHTML=" ";
				
				}
				
				return true;
		}
		
	
 
 function showForm()
 {
 
 	var x = document.getElementById("mySelect").selectedIndex;
var y = document.getElementById("mySelect").options;
var z=y[x].text;
str2="admin";
str4="student";
str3="faculty";
var n = z.localeCompare(str2);
var n1 = z.localeCompare(str3);
if( n1==0)
{
document.getElementById("faculty").style.display = "initial";
document.getElementById("faculty").style.visibility="visible";
document.getElementById("admin").style.display = "none";
document.getElementById("student").style.display = "none";
}
if( n==0)
{
document.getElementById("admin").style.display = "initial";
document.getElementById("admin").style.visibility="visible";
document.getElementById("faculty").style.display = "none";
document.getElementById("student").style.display = "none";
}
var n2 = z.localeCompare(str4);
if( n2==0)
{
document.getElementById("student").style.display = "initial";
document.getElementById("student").style.visibility="visible";
document.getElementById("faculty").style.display = "none";
document.getElementById("admin").style.display = "none";
}

 }
 </script>
 
<?php

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
$editFormAction = $_SERVER['PHP_SELF'];

if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}


if (isset($_POST["MM_insert"]))
	{


			
	if($_POST["MM_insert"] == "form1"){
  $insertSQL = sprintf("INSERT INTO admin_details (Username, Firstname, Lastname, emailid, Contact, Gender) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Username'], "text"),
                       GetSQLValueString($_POST['Firstname'], "text"),
                       GetSQLValueString($_POST['Lastname'], "text"),
                       GetSQLValueString($_POST['emailid'], "text"),
                       GetSQLValueString($_POST['Contact'], "text"),
                       GetSQLValueString($_POST['Gender'], "text"));
					   
					     $pass=rand();
  $insertSQL1=sprintf("insert into login values(%s,'admin',$pass)", GetSQLValueString($_POST['Username'], "text"));
  $Result1 = mysql_query($insertSQL, $con1) or die(mysql_error());
   $Result2 = mysql_query($insertSQL1, $con1) or die(mysql_error());
   		}
		elseif($_POST["MM_insert"] == "form3")
		{
		
		$insertSQL = sprintf("INSERT INTO student_details (username, firstname, lastname, emailid, contact, class, gender) VALUES (%s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['username'], "text"),
                       GetSQLValueString($_POST['firstname'], "text"),
                       GetSQLValueString($_POST['lastname'], "text"),
                       GetSQLValueString($_POST['emailid'], "text"),
                       GetSQLValueString($_POST['contact'], "int"),
                       GetSQLValueString($_POST['class'], "text"),
                       GetSQLValueString($_POST['gender'], "text"));
$pass=rand();
$insertSQL1=sprintf("insert into login values(%s,'student',$pass)", GetSQLValueString($_POST['username'], "text"));
  mysql_select_db($database, $con1);
  $Result1 = mysql_query($insertSQL, $con1) or die(mysql_error());
  $Result2 = mysql_query($insertSQL1, $con1) or die(mysql_error());
$email=GetSQLValueString($_POST['emailid'], "text");
		}
		elseif($_POST["MM_insert"] == "form2")
		{
		$insertSQL = sprintf("INSERT INTO faculty_details (username, Firstname, Lastname, email_id, contact_no, dob, gender, description, designation) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['username'], "text"),
                       GetSQLValueString($_POST['Firstname'], "text"),
                       GetSQLValueString($_POST['Lastname'], "text"),
                       GetSQLValueString($_POST['email_id'], "text"),
                       GetSQLValueString($_POST['contact_no'], "int"),
                       GetSQLValueString($_POST['dob'], "date"),
                       GetSQLValueString($_POST['gender'], "text"),
					    GetSQLValueString($_POST['description'], "text"),
                       GetSQLValueString($_POST['designation'], "text"));
$pass=rand();
$insertSQL1=sprintf("insert into login values(%s,'faculty',$pass)", GetSQLValueString($_POST['username'], "text"));
  mysql_select_db($database, $con1);
  
  $Result1 = mysql_query($insertSQL, $con1) or die(mysql_error());
  $Result2 = mysql_query($insertSQL1, $con1) or die(mysql_error());
  $email=GetSQLValueString($_POST['emailid'], "text");
		}
   
   if($Result1 && $Result2)
	{
			$to=$email;

			$subject="User Registered on Prodigy Spot";

			// From
			$header="from: vikram_admin<vikram0602@gmail.com>";

			// Your message	
			$message="Your Account Has been Created on Prodigy Spot  Welcome to The Hub..!!\r\n";
			$message.="Username:".GetSQLValueString($_POST['Username'], "text");
			$message.="Password:".$password;

			// send email
			$sentmail = mail($to,$subject,$message,$header);

	}


  $insertGoTo = "record-added.php";
  
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>

<div>
    <label>Select Type 
    <select id="mySelect" name="select" onchange="showForm()">
	<option value="" selected="selected"></option>
      <option value="student">student</option>
      <option value="faculty">faculty</option>
      <option value="admin">admin</option>
    </select>
    </label>
    <p>&nbsp;</p>
  
  </div>
  
<div id='admin' style="visibility:hidden; ">
  <p>Admin Form:</p>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1" onsubmit='return validate1("form1","error","uname")'  >
  <table >
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Username:</td>
      <td><input type="text" id="uname" name="Username" value="" size="32" style="display:hidden;"  /></td>
	  
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Firstname:</td>
      <td><input type="text" name="Firstname" id="firstname" value="" size="32" /></td>
    </tr>

    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Lastname:</td>
      <td><input type="text" name="Lastname" id="lastname" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Emailid:</td>
      <td><input type="text" name="emailid" id="emailid" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Contact:</td>
      <td><input type="text" name="Contact" id="contact" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Gender:</td>
      <td valign="baseline"><table>
        <tr>
          <td><input type="radio" name="Gender" value="male" checked="checked" />
            Male</td>
        </tr>
        <tr>
          <td><input type="radio" name="Gender" value="female" />
            Female</td>
        </tr>
		<tr><td><a1 id="error" style="color:red; font-size:9px;"></a1></td></tr>
      </table></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Insert record" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
  </div>
<div id="faculty" style="visibility:hidden;">
<p>Faculty Form:</p>
<form action="<?php echo $editFormAction; ?>" method="post" name="form2" id="form2" onsubmit='return validate2("form2","error2","uname1")' >
  <table>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Username:</td>
      <td><input type="text" id="uname1" name="username" value="" size="32"   /></td>
	 
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Firstname:</td>
      <td><input type="text" name="Firstname" id="firstname1" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Lastname:</td>
      <td><input type="text" name="Lastname" id="lastname1" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Description:</td>
      <td><input type="text" name="description" id="descrip" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Email_id:</td>
      <td><input type="text" name="email_id" id="emailid1" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Contact_no:</td>
      <td><input type="text" name="contact_no" id="contact1" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Dob:</td>
      <td><input type="date" name="dob" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Gender:</td>
      <td valign="baseline"><table>
        <tr>
          <td><input type="radio" name="gender" value="male" checked="checked"/>
            Male</td>
        </tr>
        <tr>
          <td><input type="radio" name="gender" value="female" />
            Female</td>
        </tr>
		<tr><td><a1 id="error2" style="color:red; font-size:9px;"></a1></td></tr>
      </table></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Designation:</td>
      <td><select name="designation">
        <option value="hod" <?php if (!(strcmp("hod", ""))) {echo "SELECTED";} ?>>HOD</option>
        <option value="lecturer" <?php if (!(strcmp("lecturer", ""))) {echo "SELECTED";} ?>>Lecturer</option>
        <option value="Senior Lecturer" <?php if (!(strcmp("Senior Lecturer", ""))) {echo "SELECTED";} ?>>Sr. Lecturer</option>
        <option value="LAB Assistant" <?php if (!(strcmp("LAB Assistant", ""))) {echo "SELECTED";} ?>>LAB Assistant</option>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Insert record" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2" />
</form>
</div>
<div id="student" style="visibility:hidden;">
<p>Student Form:</p>
<form action="<?php echo $editFormAction; ?>" method="post" name="form3" id="form3">
  <table>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Username:</td>
      <td>
        <input type="text" name="username" value="" size="32" id="uname3"  />
		<td><a1 id="error3" style="color:red; font-size:9px;"></a1></td>
    </td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Firstname:</td>
      <td>
        <input name="firstname" type="text" class="expand1" value="" size="32" />
      </td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Lastname:</td>
      <td>
        <input type="text" name="lastname" value="" size="32" />
      </td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Emailid:</td>
      <td>
      <input name="emailid" type="text" class="expand3" value="" size="32" />
     </td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Contact:+91</td>
      <td>
      <input type="text" name="contact" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Class:</td>
      <td><select name="class">
        <option value="1" <?php if (!(strcmp("1", ""))) {echo "SELECTED";} ?>>1</option>
        <option value="2" <?php if (!(strcmp("2", ""))) {echo "SELECTED";} ?>>2</option>
        <option value="3" <?php if (!(strcmp("3", ""))) {echo "SELECTED";} ?>>3</option>
        <option value="4" <?php if (!(strcmp("4", ""))) {echo "SELECTED";} ?>>4</option>
        <option value="5" <?php if (!(strcmp("5", ""))) {echo "SELECTED";} ?>>5</option>
        <option value="6" <?php if (!(strcmp("6", ""))) {echo "SELECTED";} ?>>6</option>
        <option value="7" <?php if (!(strcmp("7", ""))) {echo "SELECTED";} ?>>7</option>
        <option value="8" <?php if (!(strcmp("8", ""))) {echo "SELECTED";} ?>>8</option>
        <option value="9" <?php if (!(strcmp("9", ""))) {echo "SELECTED";} ?>>9</option>
        <option value="10" <?php if (!(strcmp("10", ""))) {echo "SELECTED";} ?>>10</option>
        <option value="11" <?php if (!(strcmp("11", ""))) {echo "SELECTED";} ?>>11</option>
        <option value="12" <?php if (!(strcmp("12", ""))) {echo "SELECTED";} ?>>12</option>
       
      </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Gender:</td>
      <td valign="baseline"><table>
        <tr>
          <td><input type="radio" name="gender" value="male" checked="checked" />
            Male</td>
        </tr>
        <tr>
          <td><input type="radio" name="gender" value="female" />
            Female</td>
        </tr>
      </table></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Insert record" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form3" />
</form>
</div>
<?php include_once("footer.php"); ?>