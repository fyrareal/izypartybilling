<?php
	session_start();
	include ("dbconnect.php");
	// check to see if user is logging out

	// if login form has been submitted, check if username and password match
//	if(isset($_POST['login'])) {
//		$login_sql="SELECT * FROM user WHERE username='".$_POST['username']."' AND password='".sha1($_POST['password'])."'";
//		if($login_query=mysqli_query($dbconnect, $login_sql)) {
//			$login_rs=mysqli_fetch_assoc($login_query);
//			$_SESSION['admin']=$login_rs['username'];
//		}
//	}
//	
	
	if(isset($_SESSION['admin'])) {
		include("admin_panel.php");
	} else {
		include("index.php");
	}

if(isset($_GET['action'])=='logout'){
           unset($_SESSION['admin']);
        header('Location: index.php');
       }




?>
    <html>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    
    <body class="adminpanel">
        <div class="maincontent">
        <?php 
			if(isset($_GET['page'])) {				
				$page=$_GET['page'];
				include("$page.php");
			}
		?>
        </div>

    </body>

    </html>