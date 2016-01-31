<div class="row" style="margin:50px;">
    <div class="col-md-4">
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation" class="active"><a href="admin.php?page=add_LD" action="">Add Ladies Data</a></li>
            <li role="presentation"><a href="admin.php?page=edit_LD">Edit Ladies Data</a></li>
            <li role="presentation"><a href="admin.php?page=delete_LD">Delete Ladies Data</a></li>
        </ul>
    </div>

    <div class="col-md-5">
        <form method="post" action="admin.php?page=addLD">
         <h3 style="margin:0;margin-bottom:10px;"><strong>New Data</strong></h3> 

            <div class="input-group" style="margin:0;margin-bottom:10px;">
                <span style="color:white;background-color:orange!important;" class="input-group-addon" id="sizing-addon2">
                    <strong>Ladies Name</strong>
                </span>
                <input style="align-text:center;"  name="addLDName" type="text" class="form-control" placeholder="enter ladies name...." aria-describedby="sizing-addon2">
            </div>
            <div class="input-group" style="margin:0;margin-bottom:10px;">
                <span style="color:white;background-color:orange!important;" class="input-group-addon" id="sizing-addon2">
                    <strong>Ladies Fee</strong>
                </span>
                <input style="align-text:center;"  name="addLDFee" type="text" class="form-control" placeholder="enter ladies fee...." aria-describedby="sizing-addon2">
            </div>
            <button type="submit"  name="addLD" style="color:white;background-color:orange!important;" class="btn btn-default"><strong>Add</strong></button>

      
    </form>
</div>

