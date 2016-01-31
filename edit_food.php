<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function () {
            $("#foodSelect").change(function () {
                $.post("ajax.php", {
                        foodSelect: $(this).val()
                    })
                    .success(function (data) {

                        $(".result").html(data);
                    });
            });
        });
    </script>
-->



<div class="row" style="margin:50px;">
    <div class="col-md-4">
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation" ><a href="admin.php?page=add_food" action="">Add Foods & Drinks</a></li>
            <li role="presentation" class="active"><a href="admin.php?page=edit_food">Edit Foods & Drinks</a></li>
            <li role="presentation"><a href="admin.php?page=delete_food">Delete Foods & Drinks</a></li>
        </ul>
    </div>

    <div class="col-md-5">
        <form method="post" action="admin.php?page=editFood">
            <h3 style="margin:0;margin-bottom:10px;"><strong>Recent Data</strong></h3>
            <div class="input-group">
                <span style="color:white;background-color:orange!important;" class="input-group-addon" id="sizing-addon2">
                                        <strong>Food Name</strong>
                </span>
                <select id="foodSelect" name="foodSelect" class="btn btn-default" onchange="change(this.id,'rsEdit')">
                <?php 
                    $foodSelect_sql="select * from item";
                $foodSelect_qry=mysqli_query($dbconnect,$foodSelect_sql);
                $foodSelect_rs=mysqli_fetch_assoc($foodSelect_qry);
                do{?>
                <option value="<?php echo $foodSelect_rs['item_id'];?>"><?php echo $foodSelect_rs['item_name']; ?>
                    
                </option><?php               
                } while ($foodSelect_rs=mysqli_fetch_assoc($foodSelect_qry));
                ?>
                </select>
              
               
            </div>
            
            <h3><strong>New Data</strong></h3>
            <div class="input-group" style="margin-top:10px;">
                <span style="color:white;background-color:orange!important;" class="input-group-addon" id="sizing-addon2">
                    <strong>Food Name</strong>
                </span>
                <input style="align-text:center;" name="editFoodName" type="text" class="form-control" placeholder="enter food name...." aria-describedby="sizing-addon2">
 
            </div>
            <div class="input-group" style="margin-top:10px;">
                <span style="color:white;background-color:orange!important;" class="input-group-addon" id="sizing-addon2">
                    <strong>Food Price</strong>
                </span>
                <input style="align-text:center;" name="editFoodPrice" type="text" class="form-control" placeholder="enter food price...." aria-describedby="sizing-addon2">
            </div>
            <button type="submit" name="editFood" style="margin-top:10px;color:white;background-color:orange!important;" class="btn btn-default">
                <strong>Update</strong>
                
            </button>
             <div id="rsEdit" name="rsEdit" class="result">
                    
                </div>
            
 
        </form>

    </div>
</div>