<?php
    include 'dbconnect.php';
    session_start();
  
    $username = null;
    $password = null;
    
       
        
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if(!empty($_POST["username"]) && !empty($_POST["password"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            $result = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'");
            $data = mysql_fetch_array($result);
            $auth = $data['authorization'];
        

            if($auth==1) {
                $_SESSION["authenticated"] = 'true';
                header('Location: receptionist.php');
                $_SESSION['receptionist']=$data['username'];
            }
            else if ($auth==2) {
                 header('Location: waitress.php');
                $_SESSION['waitress']=$data['username'];
            }
            else if ($auth==3) {
                 header('Location: cashier.php');
                $_SESSION['cashier']=$data['username'];
            }
            else {
                header('Location: index.php');
            }

        } else {
            header('Location: index.php');
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
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>  

<div class="container" id="tengah">    
    
    <div class="row">
        <form method="post" class="col s4" id="tengah">                      
                <div class="center-align">
                    <img src="assets/logo.png" style="width: 150px">
                </div>
                <br/>
                <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate" name="username" required>
                    <label for="icon_prefix">Username</label>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="password" type="password" class="validate" name="password" required>
                    <label for="icon_telephone">Password</label>
                </div>

                <div class="row center-align">
                <input class="btn waves-effect waves-light" type="submit" value="Login">
                </div>

        </form>
    
   
          </div>
    </div>
        
        
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>