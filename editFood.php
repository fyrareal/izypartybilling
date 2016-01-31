<?php
//    session_start();
    
if(!isset($_SESSION['admin'])){
    header("Location:index.php");
}

if(!isset($_POST['editFood'])){
     header("Location:index.php");
}
// mysql_query("UPDATE roomorder SET end='$date' WHERE customer_name='$custName'");

$editFood_sql="UPDATE item SET item_name='".mysqli_real_escape_string($dbconnect,$_POST['editFoodName'])."'  where item_id='".mysqli_real_escape_string($dbconnect,$_POST['foodSelect'])."'";

$editFoodP_sql="UPDATE item SET item_price='".mysqli_real_escape_string($dbconnect,$_POST['editFoodPrice'])."'  where item_id='".mysqli_real_escape_string($dbconnect,$_POST['foodSelect'])."'";


//$editFood_sql="UPDATE item SET item_name='".mysqli_real_escape_string($dbconnect,$_POST['editFoodName'])."' item_price='".mysqli_real_escape_string($dbconnect,$_POST['editFoodPrice'])."' where item_id='".mysqli_real_escape_string($dbconnect,$_POST['foodSelect'])."'";



$editFood_qry= mysqli_query($dbconnect,$editFood_sql);
$editFoodP_qry= mysqli_query($dbconnect,$editFoodP_sql);
?>

<div class="row" style="margin:50px;">
    <div class="col-md-4">
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation"><a href="admin.php?page=add_food" action="">Add Foods & Drinks</a></li>
            <li role="presentation" class="active"><a href="admin.php?page=edit_food">Edit Foods & Drinks</a></li>
            <li role="presentation"><a href="admin.php?page=delete_food">Delete Foods & Drinks</a></li>
        </ul>
    </div>

    <div class="col-md-5">
        <h2 style="margin:0;">Food Updated</h2>

    </div>
</div>
