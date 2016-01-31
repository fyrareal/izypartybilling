<?php
//    session_start();
    
if(!isset($_SESSION['admin'])){
    header("Location:index.php");
}

if(!isset($_POST['deleteLD'])){
     header("Location:index.php");
}

$delFood_sql="delete from ladies where ladies_id='".mysqli_real_escape_string($dbconnect,$_POST['delLDSelect'])."'";
$delFood_qry= mysqli_query($dbconnect,$delFood_sql);

?>
<div class="row" style="margin:50px;">
    <div class="col-md-4">
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation"><a href="admin.php?page=add_LD" action="">Add Ladies Data</a></li>
            <li role="presentation"><a href="admin.php?page=edit_LD">Edit Ladies Data</a></li>
            <li role="presentation"  class="active"><a href="admin.php?page=delete_LD">Delete Ladies Data</a></li>
        </ul>
    </div>

    <div class="col-md-5">
<h2 style="margin:0;">Ladies Data Deleted</h2>

    </div>
</div>
