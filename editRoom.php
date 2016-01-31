<?php
//    session_start();
    
if(!isset($_SESSION['admin'])){
    header("Location:index.php");
}

if(!isset($_POST['editRoom'])){
     header("Location:index.php");
}
// mysql_query("UPDATE roomorder SET end='$date' WHERE customer_name='$custName'");

$editRoom_sql="UPDATE room SET room_name='".mysqli_real_escape_string($dbconnect,$_POST['editRoomName'])."',room_type='".mysqli_real_escape_string($dbconnect,$_POST['editRoomType'])."',room_price='".mysqli_real_escape_string($dbconnect,$_POST['editRoomFee'])."'  where room_id='".mysqli_real_escape_string($dbconnect,$_POST['roomEditSelect'])."'";


//$editFood_sql="UPDATE item SET item_name='".mysqli_real_escape_string($dbconnect,$_POST['editFoodName'])."' item_price='".mysqli_real_escape_string($dbconnect,$_POST['editFoodPrice'])."' where item_id='".mysqli_real_escape_string($dbconnect,$_POST['foodSelect'])."'";



$editRoom_qry= mysqli_query($dbconnect,$editRoom_sql);

?>

<div class="row" style="margin:50px;">
    <div class="col-md-4">
       <ul class="nav nav-pills nav-stacked">
            <li role="presentation"><a href="admin.php?page=add_room" action="">Add Room</a></li>
            <li role="presentation" class="active"><a href="admin.php?page=edit_room">Edit Room</a></li>
            <li role="presentation"><a href="admin.php?page=delete_room">Delete Room</a></li>
        </ul>
    </div>

    <div class="col-md-5">
        <h2 style="margin:0;">Room Data Updated</h2>

    </div>
</div>
