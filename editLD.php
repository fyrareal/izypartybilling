<?php
//    session_start();
    
if(!isset($_SESSION['admin'])){
    header("Location:index.php");
}

if(!isset($_POST['editLD'])){
     header("Location:index.php");
}
// mysql_query("UPDATE roomorder SET end='$date' WHERE customer_name='$custName'");

$editLD_sql="UPDATE ladies SET ladies_name='".mysqli_real_escape_string($dbconnect,$_POST['editLDName'])."'  where ladies_id='".mysqli_real_escape_string($dbconnect,$_POST['LDSelect'])."'";

$editLDP_sql="UPDATE ladies SET ladies_price='".mysqli_real_escape_string($dbconnect,$_POST['editLDFee'])."'  where ladies_id='".mysqli_real_escape_string($dbconnect,$_POST['LDSelect'])."'";


//$editFood_sql="UPDATE item SET item_name='".mysqli_real_escape_string($dbconnect,$_POST['editFoodName'])."' item_price='".mysqli_real_escape_string($dbconnect,$_POST['editFoodPrice'])."' where item_id='".mysqli_real_escape_string($dbconnect,$_POST['foodSelect'])."'";



$editLD_qry= mysqli_query($dbconnect,$editLD_sql);
$editLDP_qry= mysqli_query($dbconnect,$editLDP_sql);
?>

<div class="row" style="margin:50px;">
    <div class="col-md-4">
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation"><a href="admin.php?page=add_LD" action="">Add Ladies Data</a></li>
            <li role="presentation"  class="active"><a href="admin.php?page=edit_LD">Edit Ladies Data</a></li>
            <li role="presentation"><a href="admin.php?page=delete_LD">Delete Ladies Data</a></li>
        </ul>
    </div>

    <div class="col-md-5">
        <h2 style="margin:0;">Ladies Data Updated</h2>

    </div>
</div>
