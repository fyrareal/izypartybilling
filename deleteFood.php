<?php
//    session_start();
    
if(!isset($_SESSION['admin'])){
    header("Location:index.php");
}

if(!isset($_POST['deleteFood'])){
     header("Location:index.php");
}

$delFood_sql="delete from item where item_id='".mysqli_real_escape_string($dbconnect,$_POST['foodSelect'])."'";
$delFood_qry= mysqli_query($dbconnect,$delFood_sql);

?>
<div class="row" style="margin:50px;">
    <div class="col-md-4">
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation"><a href="admin.php?page=add_food" action="">Add Foods & Drinks</a></li>
            <li role="presentation"><a href="admin.php?page=edit_food">Edit Foods & Drinks</a></li>
            <li role="presentation" class="active"><a href="admin.php?page=delete_food">Delete Foods & Drinks</a></li>
        </ul>
    </div>

    <div class="col-md-5">
<h2 style="margin:0;">Food Deleted</h2>

    </div>
</div>
