<div class="row" style="margin:50px;">
    <div class="col-md-4">
       <ul class="nav nav-pills nav-stacked">
            <li role="presentation"><a href="admin.php?page=add_room" action="">Add Room</a></li>
            <li role="presentation"><a href="admin.php?page=edit_room">Edit Room</a></li>
            <li role="presentation" class="active"><a href="admin.php?page=delete_room">Delete Room</a></li>
        </ul>
    </div>

    <div class="col-md-5">
        <form method="post" action="admin.php?page=deleteRoom">


        <h3 style="margin:0;margin-bottom:10px;"><strong>Recent Data</strong></h3>
          <div class="input-group">
                <span style="color:white;background-color:orange!important;" class="input-group-addon" id="sizing-addon2">
                                        <strong>Room Name</strong>
                </span>
                <select id="delRoomSelect" name="delRoomSelect" class="btn btn-default" onchange="change(this.id,'rsEdit')">
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
            
        
            <button type="submit" name="deleteRoom" style="margin-top:10px;color:white;background-color:orange!important;" class="btn btn-default"><strong>Delete</strong></button>


        </form>
</div>
    </div>
</div>