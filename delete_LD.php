<div class="row" style="margin:50px;">
    <div class="col-md-4">
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation"><a href="admin.php?page=add_LD" action="">Add Ladies Data</a></li>
            <li role="presentation"><a href="admin.php?page=edit_LD">Edit Ladies Data</a></li>
            <li role="presentation"  class="active"><a href="admin.php?page=delete_LD">Delete Ladies Data</a></li>
        </ul>
    </div>

    <div class="col-md-5">
        <form method="post" action="admin.php?page=deleteLD">


        <h3 style="margin:0;margin-bottom:10px;"><strong>Recent Data</strong></h3>
            <div class="input-group">
                <span style="color:white;background-color:orange!important;" class="input-group-addon" id="sizing-addon2">
                                        <strong>Ladies Name</strong>
                </span>
                <select name="delLDSelect" class="btn btn-default">
               <?php 
                    $foodSelect_sql="select * from ladies";
                $foodSelect_qry=mysqli_query($dbconnect,$foodSelect_sql);
                $foodSelect_rs=mysqli_fetch_assoc($foodSelect_qry);
                do{?>
                <option value="<?php echo $foodSelect_rs['ladies_id'];?>"><?php echo $foodSelect_rs['ladies_name']; ?>
                    
                </option><?php               
                } while ($foodSelect_rs=mysqli_fetch_assoc($foodSelect_qry));
                ?>
            </select>
            </div>
            <button type="submit" name="deleteLD" style="margin-top:10px;color:white;background-color:orange!important;" class="btn btn-default"><strong>Delete</strong></button>


        </form>

    </div>
</div>