<div class="row" style="margin:50px;">
    <div class="col-md-4">
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation" class="active"><a href="admin.php?page=add_food" action="">Add Foods & Drinks</a></li>
            <li role="presentation"><a href="admin.php?page=edit_food">Edit Foods & Drinks</a></li>
            <li role="presentation"><a href="admin.php?page=delete_food">Delete Foods & Drinks</a></li>
        </ul>
    </div>

    <div class="col-md-5">
        <form method="post" action="admin.php?page=addFood">

<h3 style="margin:0;margin-bottom:10px;"><strong>New Data</strong></h3>
            <div class="input-group">
                <span style="color:white;background-color:orange!important;" class="input-group-addon" id="sizing-addon2">
                    <strong>Food Name</strong>
                </span>
                <input style="align-text:center;" name="addFoodName" type="text" class="form-control" placeholder="enter food name...." aria-describedby="sizing-addon2">
            </div>
            <div class="input-group" style="margin-top:10px;">
                <span style="color:white;background-color:orange!important;" class="input-group-addon" id="sizing-addon2">
                    <strong>Food Price</strong>
                </span>
                <input style="align-text:center;" name="addFoodPrice" type="text" class="form-control" placeholder="enter food price...." aria-describedby="sizing-addon2">
            </div>
            <button type="submit" name="addFood" style="margin-top:10px;color:white;background-color:orange!important;" class="btn btn-default"><strong>Add</strong></button>


        </form>

    </div>
</div>