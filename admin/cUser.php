<title>Create User</title>
<?php
include_once("admin_template.php");
 include("config.php");
 ?>
 <script>
 
 
 
	
		function validate1(x,y,z)
		{
		var id=document.forms[x][z].value;
			var regexp = /[a-z]/gi;
			//alert(id);
			
			if(id == "" || id == null)
			{
				
				
				document.getElementById(y).innerHTML="* Username should be filled";
				//document.getElementById('uname').value=null;
				document.getElementById(z).focus();
				return false;
			}
			
			id=document.forms[x]["firstname"].value;
		if(id == "" || id == null)
			{
				
				
				document.getElementById(y).innerHTML="*Name should be filled";
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
			//alert(id);
			
			if(id == "" || id == null)
			{
				
				
				document.getElementById(y).innerHTML="* Username should be filled";
				//document.getElementById('uname').value=null;
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
str2="Admin";
str3="Guest";
var n = z.localeCompare(str2);
var n1 = z.localeCompare(str3);
if( n1==0)
{
document.getElementById("guest").style.display = "initial";
document.getElementById("guest").style.visibility="visible";
document.getElementById("admin").style.display = "none";
}
if( n==0)
{
document.getElementById("admin").style.display = "initial";
document.getElementById("admin").style.visibility="visible";
document.getElementById("guest").style.display = "none";
}


 }
 </script>
 
<div>
    <label>Select Type 
    <select id="mySelect" name="select" onchange="showForm()">
	<option value="" selected="selected"></option>
      <option value="guest">Guest</option>
      <option value="admin">Admin</option>
    </select>
    </label>
    <p>&nbsp;</p>
  
  </div>
  
<div id='admin' style="visibility:hidden; ">
  <p>Admin Form:</p>
<form action="add_admin.php" method="post" name="form1" id="form1" onsubmit='return validate1("form1","error","uname")'  >
  <table >
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Username:&nbsp</td>
      <td><input type="text" id="uname" name="Username" value="" size="32" style="display:hidden;"  /></td>
	  
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Name:&nbsp</td>
      <td><input type="text" name="Firstname" id="firstname" value="" size="32" /></td>
    </tr>

    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Emailid:&nbsp</td>
      <td><input type="text" name="emailid" id="emailid" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Contact:&nbsp</td>
      <td><input type="text" name="Contact" id="contact" value="" size="32" /></td>
    </tr>
   
		<tr><td><p id="error" style="color:red; font-size:9px;"></p></td></tr>
      </table></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Insert record" /></td>
    </tr>
  </table>
</form>
  </div>
<div id="guest" style="visibility:hidden;">
<p>Guest Form:</p>
<form action="add_guest.php" method="post" name="form2" id="form2" onsubmit='return validate2("form2","error2","uname1")' >
  <table>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Username:&nbsp</td>
      <td><input type="text" id="uname1" name="username" value="" size="32"   /></td>
	 
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Name:&nbsp</td>
      <td><input type="text" name="Firstname" id="firstname1" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Email_id:&nbsp</td>
      <td><input type="text" name="email_id" id="emailid1" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Contact_no:&nbsp</td>
      <td><input type="text" name="contact_no" id="contact1" value="" size="32" /></td>
    </tr>
    <tr><td><p id="error2" style="color:red; font-size:9px;"></p></td></tr>
      </table></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Insert record" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2" />
</form>
</div>
<?php include_once("footer.html"); ?>
