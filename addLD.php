<?php
//    session_start();
    
if(!isset($_SESSION['admin'])){
    header("Location:index.php");
}

if(!isset($_POST['addLD'])){
     header("Location:index.php");
}

$addLD_sql="INSERT INTO ladies VALUES ('','".mysqli_real_escape_string($dbconnect,$_POST['addLDName'])."' , '".mysqli_real_escape_string($dbconnect,$_POST['addLDFee'])."')";
$addLD_qry= mysqli_query($dbconnect,$addLD_sql);

?>
<div class="row" style="margin:50px;">
    <div class="col-md-4">
           <ul class="nav nav-pills nav-stacked">
            <li role="presentation" class="active"><a href="admin.php?page=add_LD" action="">Add Ladies Data</a></li>
            <li role="presentation"><a href="admin.php?page=edit_LD">Edit Ladies Data</a></li>
            <li role="presentation"><a href="admin.php?page=delete_LD">Delete Ladies Data</a></li>
        </ul>
    </div>

    <div class="col-md-5">
<h2 style="margin:0;">Ladies Data Added</h2>

    </div>
</div>
