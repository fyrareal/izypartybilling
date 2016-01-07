<?php
$username = null;
$password = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if($username == 'user' && $password == 'pass') {
            session_start();
            $_SESSION["authenticated"] = 'true';
            header('Location: receptionist.php');
        }
        else if ($username == 'user' && $password == 'pass2') {
             header('Location: waitress.php');
        }
        else {
            header('Location: login.php');
        }
        
    } else {
        header('Location: login.php');
    }
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
   
    
       
        <title>Izy Party billing</title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize-orange.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/ganti.css" media="screen, projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   
</head>
<body>
<div id="page">
    <!-- [banner] -->
    <div class="center-align">
        <img src="assets/logo.png" style="width: 150px">
    </div>
    <!-- [content] -->
   
    <div class="row center-align">
        <form id="login" method="post">
            <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate" name="username">
                    <label for="icon_prefix">Username</label>
            </div>
            
            <div class="input-field">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="icon_telephone" type="password" class="validate" name="password">
                    <label for="icon_telephone">Password</label>
            </div>
<!--
            <label for="username">Username:</label>
            </br>
            <input id="username" name="username" type="text" required>
-->
<!--
            <label for="password">Password:</label>
            <input id="password" name="password" type="password" required>                    
            <br/>
-->
            <input class="btn waves-effect waves-light" type="submit" value="Login">
<!--            <input type="submit" value="Login">-->
        </form>
    </div>

    
   
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
<?php } ?>
