<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>TRANSPORT COMPANY COMPUTERISATION</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />

<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.setup.js"></script>
</head>

<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="header">
     <div class="fl_left">
	
	<p><img src="images/491.gif" alt="Smiley face" align="middle"></p>
      <h1><a href="#"><strong>&nbsp; &nbsp; &nbsp; &nbsp; Transport Company Computerization  </strong></a></h1>
      
	  <p><img src="images/491.gif" alt="Smiley face" align="middle"></p><br>
    </div></center>
    
	</div>
    
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
     <div id="topnav">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="admin.php">Admin</a></li>
        <li><a href="manager.php">Manager</a></li>
	 <li><a href="staff.php">Staff</a></li>
	 <li><a href="order.php">Client</a></li>
        <li class="active"><a href="#">Login Portal</a><br>
          <ul>
            <li><a href="adminlog.php">Admin login</a></li>
            <li><a href="managerlog.php">Manager login</a></li>
            <li><a href="stafflog.php">Staff Login</a></li>
	    <li><a href="client.php">Client Login</a></li>
	    <li><a href="client1.php">Client Registration</a></li>
          </ul>
        </li>
      </ul>
    </div>
    
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
	<div class="main">
		<form method="post" name="admin">
    		<h1><font color="#059BD8"><b><H2>Admin Login</H2></b></h1></font>
  			<div class="inset">
			
	    		 <br><p><label><font color="#059BD8" size="4"><b>ADMIN LOGINID</b></font></label></p><br>
   	 			<input type="text" name="aname" placeholder="Admin Login ID" required/>
				</p>
  				<p>
				    <p><label><font color="#059BD8" size="4"><b>PASSWORD</b></font></label></p>
				    <input type="password" name="apwd" placeholder="Password" required/>
  				</p>  
 			 </div>
 	 
			  <p class="p-container">
			    <input type="submit" name="submit" value="Login">
			  </p>
		</form>
	</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper col8">
  <div id="copyright">
  <center> <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">TRANSPORT COMPUTERIZATION COMPANY</a></p></center>
    <br class="clear" />
  </div>
</div>
</body>
</html>
<?php

session_start();

	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	
		include 'connection.php';
		if(isset($_POST['submit']))
		{
			$uname=$_POST['aname'];
			$pwd=$_POST['apwd'];
			$result=mysql_query("select * from admin where aname='$uname' and apwd='$pwd'");
			$count=mysql_fetch_array($result);
			if($count>0)
			{
				
				
				echo "<script>window.open('admin.php','_self')</script>";  
				$_SESSION['aname']=$uname; 
			}
				else
				{
					header('location:login_error5.php');	
				}
			
		}
?>
