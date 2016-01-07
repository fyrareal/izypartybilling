<?php
    
    session_start();
  

$username = null;
$password = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["user"];
        $password = $_POST["pass"];
        
        if($password =='receptionist') {
            
            $_SESSION["authenticated"] = 'true';
            header('Location: receptionist.php');
        }
        else {
            header('Location: cashier.php');
        }
        
    } else {
        header('Location: waitress.php');
    }
}
?>

<!DOCTYPE html>
  <html>
    <head>
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
<!--       konten-->
<div class="container" id="tengah">    
    
    <div class="row">
        <form method="post" class="col s4" id="tengah">
            
           
           
       
            <div class="row">
                <div class="center-align">
                    <img src="assets/logo.png" style="width: 150px">
                </div>
                <br/>
                <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate" name="username">
                    <label for="icon_prefix">Username</label>
                </div>
            </div>
            
            <div class="row">
                <div class="input-field">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="password" type="password" class="validate" name="password">
                    <label for="icon_telephone">Password</label>
                </div>
            </div>
            
            <div class="row center-align">
                <div>
<!--                <a class="btn waves-effect waves-light" href="/izypartybilling/receptionist.php">Log In</a>-->
                <a class="btn waves-effect waves-light" type="submit">Log In</a>
                </div>
            </div>
        </form>
    
   
          </div>
    </div>
        
        
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>