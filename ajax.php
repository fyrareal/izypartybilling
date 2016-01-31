  <?php

    //get value from page

    $foodSelect = $_POST['foodSelect'];
    //Conect with the database
//    require_once 'conectar-database.php';
    	include ("dbconnect.php");
    $query = "SELECT * FROM item where item_id =$foodSelect";
    $result = mysql_query($query);

   
    while($row = mysql_fetch_array($result)) {       
       echo $row['item_price'];
    }  

//    echo $msg;

    ?>