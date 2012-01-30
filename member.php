<?php session_start(); ?>
<?php // test corne was hier ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Database-driven Web Technology &mdash; by Daan Disselhorst & Corné van Willigen</title>
</head>

<body>

	<div id="wrapper">
	
		<div id="header">
			<h1><a href="index.php">Database-driven Web Technology</a></h1>
			<p>FINANCIAL TRANSACTIONS FOR GROUPS IN A NUTSHELL</p>
		</div>
		
		<div id="content">
			
			<h2>User Login</h2>
			
			<div class="hentry">
				
<?php



if ($_SESSION['username'])
	echo "Welcome, ".$_SESSION['username']."!<br><a href='logout.php'>Logout</a>";
else
	die("You must be logged in!");

?>






<script type="text/javascript">
function showGroup(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getGroup.php?q="+str,true);
xmlhttp.send();
}
</script>
</head>
<body>
<br />
<strong>Select group:</strong>
<form>
<select name="groups" onchange="showGroup(this.value)">
<option value="">Select a group:</option>
<option value="0">Eten</option>
<option value="1">Bier</option>
<option value="2">Etc</option>
</select>
</form>
<br />
<div id="txtHint"><b>Group info will be listed here.</b></div>











			</div>
					
			<div class="clear"></div>
			
		</div>
		
		<div id="sidebar">
			
			<div class="widget">
				<h2>What?</h2>
				<p>This website is created for our course Database-driven Web Technology. Basically we created a web application, which is connected to a MySQL Database.</p>
				<p>If you have any questions, feel free to contact us, <a href="mailto:s1683764@student.rug.nl">Daan</a> or <a href="mailto:c.j.c.van.willigen@student.rug.nl">Corné</a>.</p>
			</div>
			
		</div>
		
		<div class="clear"></div>
			
		<div id="footer">
			<p>Design by Daan en Corné.</a></p>
		</div>
		
	</div>
	
</body>
</html>
