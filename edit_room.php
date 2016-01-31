
<div class="row" style="margin:50px;">
    <div class="col-md-4">
         <ul class="nav nav-pills nav-stacked">
            <li role="presentation"><a href="admin.php?page=add_room" action="">Add Room</a></li>
            <li role="presentation" class="active"><a href="admin.php?page=edit_room">Edit Room</a></li>
            <li role="presentation"><a href="admin.php?page=delete_room">Delete Room</a></li>
        </ul>
    </div>

    <div class="col-md-5">
        <form method="post" action="admin.php?page=editRoom">
            <h3 style="margin:0;margin-bottom:10px;"><strong>Recent Data</strong></h3>
            <div class="input-group">
                <span style="color:white;background-color:orange!important;" class="input-group-addon" id="sizing-addon2">
                                        <strong>Room Name</strong>
                </span>
                <select id="roomEditSelect" name="roomEditSelect" class="btn btn-default" onchange="change(this.id,'rsEdit')">
                <?php 
                    $foodSelect_sql="select * from room";
                $foodSelect_qry=mysqli_query($dbconnect,$foodSelect_sql);
                $foodSelect_rs=mysqli_fetch_assoc($foodSelect_qry);
                do{?>
                <option value="<?php echo $foodSelect_rs['room_id'];?>"><?php echo $foodSelect_rs['room_name']; ?>
                    
                </option><?php               
                } while ($foodSelect_rs=mysqli_fetch_assoc($foodSelect_qry));
                ?>
                </select>
              
               
            </div>
            
            <h3><strong>New Data</strong></h3>
            <div class="input-group" style="margin-top:10px;">
                <span style="color:white;background-color:orange!important;" class="input-group-addon" id="sizing-addon2">
                    <strong>Room Name</strong>
                </span>
                <input style="align-text:center;" name="editRoomName" type="text" class="form-control" placeholder="enter room name...." aria-describedby="sizing-addon2">
 
            </div>
            
             <div class="input-group" style="margin:0p;margin-top:10px;">
                <span style="color:white;background-color:orange!important;" class="input-group-addon" id="sizing-addon2">
                                        <strong>Room Type</strong>
                </span>
                <select id="editRoomType" name="editRoomType" class="btn btn-default" onchange="change(this.id,'rsEdit')">
                <?php 
                    $foodSelect_sql="select * from room_type order by id_room_type";
                $foodSelect_qry=mysqli_query($dbconnect,$foodSelect_sql);
                $foodSelect_rs=mysqli_fetch_assoc($foodSelect_qry);
                do{?>
                <option value="<?php echo $foodSelect_rs['list_room_type'];?>"><?php echo $foodSelect_rs['list_room_type']; ?>
                    
                </option><?php               
                } while ($foodSelect_rs=mysqli_fetch_assoc($foodSelect_qry));
                ?>
                </select>
              
               
            </div>
            
            <div class="input-group" style="margin-top:10px;">
                <span style="color:white;background-color:orange!important;" class="input-group-addon" id="sizing-addon2">
                    <strong>Room Fee</strong>
                </span>
                <input style="align-text:center;" name="editRoomFee" type="text" class="form-control" placeholder="enter room fee...." aria-describedby="sizing-addon2">
            </div>
            <button type="submit" name="editRoom" style="margin-top:10px;color:white;background-color:orange!important;" class="btn btn-default">
                <strong>Update</strong>
                
            </button>
  
 
        </form>

    </div>
</div>