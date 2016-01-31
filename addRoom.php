<?php
//    session_start();
    
if(!isset($_SESSION['admin'])){
    header("Location:index.php");
}

if(!isset($_POST['addRoom'])){
     header("Location:index.php");
}

$addRoom_sql="INSERT INTO room VALUES ('','".mysqli_real_escape_string($dbconnect,$_POST['addRoomName'])."' , '".mysqli_real_escape_string($dbconnect,$_POST['roomAddSelect'])."','".mysqli_real_escape_string($dbconnect,$_POST['addRoomFee'])."')";
$addRoom_qry= mysqli_query($dbconnect,$addRoom_sql);

?>
<div class="row" style="margin:50px;">
    <div class="col-md-4">
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation" class="active"><a href="admin.php?page=add_room" action="">Add Room</a></li>
            <li role="presentation"><a href="admin.php?page=edit_room">Edit Room</a></li>
            <li role="presentation"><a href="admin.php?page=delete_room">Delete Room</a></li>
        </ul>
    </div>

    <div class="col-md-5">
<h2 style="margin:0;">New Room Added</h2>

    </div>
</div>
