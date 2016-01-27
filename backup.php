$("#sub").click(function(){
       $.post($("#subform").attr("action"),$("#subForm :input").serializeArray(),function(info){
           $("#result").html(info);
       }); 
    return false; 
    });
    
    $("#subform").submit(function(){
       return false; 
    });

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


<!--BAKCUP TEST>PHP-->
<?php
    mysql_connect('localhost', 'root', '');        
    mysql_select_db('test');
$dblink = mysql_connect('localhost','root','') or die(mysql_error());
//    if($_POST['submit'])
    if(isset($_POST['submit']))
    {
     foreach ($_POST['item'] as $key => $value) 
        {
            $item = $_POST["item"][$key];
//            $price = $_POST["price"][$key];
            $qty = $_POST["qty"][$key];

            $sql = mysql_query("insert into dummy values ('','$item', '$qty')");        
        }

    }   
?>
    <html>

    <body>
        <link rel="stylesheet" href="css/jquery-ui-1.8.2.custom.css" />
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.2.custom.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/ganti.css" />
        <INPUT type="button" value="Add Row" onClick="addRow('dataTable')" />

        <INPUT type="button" value="Delete Row" onClick="deleteRow('dataTable')" />

        <form action="" method="post" name="f">

            <TABLE width="425" border="1">
                <thead>
                    <tr>
                        <th width="98"></th>
                        <th width="94">Item</th>
                        <!--                        <th width="121">Price</th>-->
                        <th width="84">Qty</th>

                    </tr>
                </thead>
                <tbody id="dataTable">

                </tbody>
            </TABLE>

            <INPUT type="submit" value="Insert" name="submit" />
        </form>
        <script>
            function addRow(tableID) {

                var table = document.getElementById(tableID);

                var rowCount = table.rows.length;
                var row = table.insertRow(rowCount);

                var cell1 = row.insertCell(0);
                var element1 = document.createElement("input");
                element1.type = "checkbox";
                element1.name = "chkbox[]";
                cell1.appendChild(element1);

                var cell2 = row.insertCell(1);
                                cell2.innerHTML = "<input type='text' name='item[]'>";
//                cell2.innerHTML = "<form action='' method='post'><input name='region' id='regionsearch' type='text'/></form>";

                //                var cell3 = row.insertCell(2);
                //                cell3.innerHTML = "<input type='text'  name='price[]' />";

                var cell4 = row.insertCell(2);
                cell4.innerHTML = "<input type='text'  name='qty[]' />";
            }

            function deleteRow(tableID) {
                try {
                    var table = document.getElementById(tableID);
                    var rowCount = table.rows.length;

                    for (var i = 0; i < rowCount; i++) {
                        var row = table.rows[i];
                        var chkbox = row.cells[0].childNodes[0];
                        if (null != chkbox && true == chkbox.checked) {
                            table.deleteRow(i);
                            rowCount--;
                            i--;
                        }
                    }
                } catch (e) {
                    alert(e);
                }
            }
        </script>

        <script src="js/jquery-ui-1.10.3.min.js"></script>
        <script src="js/jquerry-2.0.2.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/app.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(document).ready(function () {
                $('#regionsearch').autocomplete({
                    source: 'search_region.php',
                    minLength: 1,
                });
            });
        </script>
    </body>

    </html>