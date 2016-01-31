<div class="row" style="margin:50px;">
    <div class="col-md-4">
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation" class="active"><a href="admin.php?page=add_room" action="">Add Room</a></li>
            <li role="presentation"><a href="admin.php?page=edit_room">Edit Room</a></li>
            <li role="presentation"><a href="admin.php?page=delete_room">Delete Room</a></li>
        </ul>
    </div>

    <div class="col-md-5">
      <form method="post" action="admin.php?page=addRoom">
        <h3 style="margin:0;margin-bottom:10px;"><strong>New Data</strong></h3>

            <div class="input-group" style="margin:0p;margin-bottom:10px;">
                <span style="color:white;background-color:orange!important;" class="input-group-addon" id="sizing-addon2">
                    <strong>Room Name</strong>
                </span>
                <input style="align-text:center;" name="addRoomName" type="text" class="form-control" placeholder="enter room name...." aria-describedby="sizing-addon2">
            </div>
           <div class="input-group" style="margin:0p;margin-bottom:10px;">
                <span style="color:white;background-color:orange!important;" class="input-group-addon" id="sizing-addon2">
                                        <strong>Room Type</strong>
                </span>
                <select id="roomAddSelect" name="roomAddSelect" class="btn btn-default" onchange="change(this.id,'rsEdit')">
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
            <div class="input-group" style="margin:0p;margin-bottom:10px;">
                <span style="color:white;background-color:orange!important;" class="input-group-addon" id="sizing-addon2">
                    <strong>Room Fee</strong>
                </span>
                <input style="align-text:center;" name="addRoomFee" type="text" class="form-control" placeholder="enter room fee...." aria-describedby="sizing-addon2">
            </div>
          
<!--
            <div class="input-group" style="margin:0p;margin-bottom:10px;width:35%;">
                <span style="color:white;background-color:orange!important;" class="input-group-addon" id="sizing-addon2">
                    <strong>Room Number</strong>
                </span>
                <input style="align-text:center;" type="text" class="form-control" placeholder="<?php 
                    $foodSelect_sql="select * from room_number";
                $foodSelect_qry=mysqli_query($dbconnect,$foodSelect_sql);
                $foodSelect_rs=mysqli_fetch_assoc($foodSelect_qry); echo $foodSelect_rs['number_room'] ?>" aria-describedby="sizing-addon2">
            </div>
-->
            <button type="submit" value="" name="addRoom" style="color:white;background-color:orange!important;" class="btn btn-default"><strong>Submit</strong></button>

    </form>
    </div>
