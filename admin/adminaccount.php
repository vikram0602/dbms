<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Admin Account</title>
	<meta name="description" content="description">
	<meta name="author" content="Admin">


 
<style type="text/css"> 
#panel
{

position:absolute;
right:22px;
float:right;
text-align:left;
border:5px ridge #383e44;
box-shadow: 1px 4px 4px #888888;
padding: 10px 10px 10px 10px;
width:170px;
height:200px;
font-size:20px;
color:#000000;
}
#panel1,#flip1,#panel2,#flip2,#panel3,#flip3,#panel4,#flip4,#panel5,#flip5,#panel6,#flip6
{
padding:5px;
cursor:pointer;
}
#panel1,#panel2,#panel3,#panel4,#panel5,#panel6
{
padding:5px;
display:none;
}
.expand1,.expand2,.expand3,.expand4,.expand5,.expand6{
    content:url("/intern123/imgages/add.png");
}
.collapse1,.collapse2,.collapse3,.collapse4,.collapse5,.collapse6{
    content:url("/intern123/imgages/minus.png");
}
#left-column
{
float:left;
border-right:2px ridge #383e44;
min-height:600px;
max-height:100%;
width:180px;
background-color:#383e44;
opacity:0.6;
color:#ffffff;
font-family: 'Open Sans', sans-serif;
font-size:14px;

}
#middle-column
{
	float:left;
}
a 
{
   color:green; 
   font-size:14px;
}
a:hover
{
	color:#FF3300;
	font-size:16px;
}
</style>

</head>

<body>
 <?php include("admin_template.php"); ?>
 
		<div id="middle-column">
		</div>
		
</body>
<?php include("footer.html"); ?>
</html>