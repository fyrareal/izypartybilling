<?php 
//    session_start();
    if(!isset($_SESSION['admin'])){
      header('Location: index.php');
} ?>


 <script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  var target = $(e.target).attr("href") // activated tab

});
    </script>
    <!--<ul class="nav nav-tabs nav-justified">-->
    <ul class="nav nav-tabs" style="margin:0;">
        <li role="presentation" class="disabled"><a style="color:white;background-color:orange;"><strong>ADMIN PANEL</strong></a></li>
        <li role="presentation"><a href="admin.php?page=panelFood">Foods and Drinks</a></li>
        <li role="presentation"><a href="admin.php?page=panelLD">Ladies</a></li>
        <li role="presentation"><a href="admin.php?page=panelRoom">Rooms</a></li>
        <li role="presentation" style="color:orange!important;margin-left:20px;"><a href="index.php">Logout</a></li>
<!--
        <li>
            <button role="presentation" type="submit" class="btn btn-default" style="background-color:orange;right:0;" href="admin.php?page=add_LD"><a href="admin.php">Logout</a></button>
        </li>
-->
    </ul>
<!--

<h1 style="text-align:center;color:white;background-color:orange;margin:0;"><strong>WELCOME</strong><span>&nbsp;<?php echo $_SESSION['admin'];?></span></h1>-->
