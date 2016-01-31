<?php
//    session_start();
    
if(!isset($_SESSION['admin'])){
    header("Location:index.php");
}

if(!isset($_POST['deleteRoom'])){
     header("Location:index.php");
}

$delRoom_sql="delete from room where room_id='".mysqli_real_escape_string($dbconnect,$_POST['delRoomSelect'])."'";
$delRoom_qry= mysqli_query($dbconnect,$delRoom_sql);

?>
<div class="row" style="margin:50px;">
    <div class="col-md-4">
           <ul class="nav nav-pills nav-stacked">
            <li role="presentation"><a href="admin.php?page=add_room" action="">Add Room</a></li>
            <li role="presentation"><a href="admin.php?page=edit_room">Edit Room</a></li>
            <li role="presentation" class="active"><a href="admin.php?page=delete_room">Delete Room</a></li>
        </ul>
    </div>

    <div class="col-md-5">
<h2 style="margin:0;">Room Deleted</h2>

    </div>
</div>
