<?php
    session_start();


    mysql_connect('localhost', 'root', '');
    mysql_select_db('izyparty');        

    //Status Ruangan Karaoke
    $_SESSION['status_room1']='Kosong';$_SESSION['status2']='Kosong';$status3='Kosong';$status4='Kosong';$status5='Kosong';
    $status6='Kosong';$status7='Kosong';$status8='Kosong';$status9='Kosong';$status10='Kosong';
    $status11='Kosong';$status12='Kosong';$status13='Kosong';$status14='Kosong';$status15='Kosong';
    $status16='Kosong';$status17='Kosong';$status18='Kosong';$status19='Kosong';$status20='Kosong';
    
    //Default field di edit text
//    $_SESSION['custName1'] ='Nama Pengunjung';$custName2 ='Nama Pengunjung';$custName3 ='Nama Pengunjung';$custName4 ='Nama Pengunjung';$custName5 ='Nama Pengunjung';
//    $custName6 ='Nama Pengunjung';$custName7 ='Nama Pengunjung';$custName8 ='Nama Pengunjung';$custName9 ='Nama Pengunjung';$custName10 ='Nama Pengunjung'; 
    

    //Fixing refresh page
//    if($_SESSION)
//    {
//        $_SESSION['customerName1_receptionist']='';
//        $_SESSION['customerName2_receptionist']='';
//    }





$custName1 = $_SESSION['customerName1_receptionist'];
$custName2 = $_SESSION['customerName2_receptionist'];
    
    

    if(isset($_POST['modal5'])){
        $status5 = 'Isi';
    }   
    
    
    if(isset($_POST['modal1_receptionist']))
    {
        if($_SESSION['status_room1']=='Kosong')
        {
            $roomID = 2;        
            $_SESSION['customerName1_receptionist'] = $_POST['customerName1_receptionist'];
            $custName1=$_SESSION['customerName1_receptionist'];
            //handle time
            date_default_timezone_set('Asia/Bangkok');
            $date = date('m/d/y H:i:s a',time()); 
            mysql_connect('localhost', 'root', '');
            mysql_select_db('izyparty'); 
            mysql_query("INSERT INTO roomorder (customer_name,room_id,start) VALUES ('$custName1','$roomID','$date')"); 
            $_SESSION['status_room1']='Isi';
        }else if ($_SESSION['status_room1']='Isi')
        {
            $_SESSION['status_room1']='Kosong';
        }
        
    }

    if(isset($_POST['modal2_receptionist']))
    {
        $roomID = 3;        
        $_SESSION['customerName2_receptionist'] = $_POST['customerName2_receptionist'];
        $custName2=$_SESSION['customerName2_receptionist'];
        //handle time
        date_default_timezone_set('Asia/Bangkok');
        $date = date('m/d/y H:i:s a',time()); 
        mysql_connect('localhost', 'root', '');
        mysql_select_db('izyparty'); 
        mysql_query("INSERT INTO roomorder (customer_name,room_id,start) VALUES ('$custName2','$roomID','$date')");            


        $_SESSION['status_room2']='Isi';        
    }

    if(isset($_POST['modal3_receptionist']))
    {
        $roomID = 4;        
        $_SESSION['customerName3_receptionist'] = $_POST['customerName3_receptionist'];
        $custName1=$_SESSION['customerName3_receptionist'];
        //handle time
        date_default_timezone_set('Asia/Bangkok');
        $date = date('m/d/y H:i:s a',time()); 
        mysql_connect('localhost', 'root', '');
        mysql_select_db('izyparty'); 
        mysql_query("INSERT INTO roomorder (customer_name,room_id,start) VALUES ('$custName3','$roomID','$date')");            


        $_SESSION['status_room3']='Isi';        
    }

    if(isset($_POST['modal4_receptionist']))
    {
        $roomID = 5;        
        $custName4 = $_POST['customerName4_receptionist'];
        
        //handle time
        date_default_timezone_set('Asia/Bangkok');
        $date = date('m/d/y H:i:s a',time()); 
        mysql_connect('localhost', 'root', '');
        mysql_select_db('izyparty'); 
        mysql_query("INSERT INTO roomorder (customer_name,room_id,start) VALUES ('$custName4','$roomID','$date')");            
        
        $_SESSION['customerName4_receptionist']=$custName4;
        $_SESSION['status_room4']='Isi';        
    }




?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Receptionist</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <!-- Theme style -->
    <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/ganti.css" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    <link rel="shortcut icon" href="assets/logo.ico">
</head>

<body>
    
    <script type='text/javascript'>
        function gantiText()
        {
            document.getElementById("gantiText").innerHTML = "Isi";
            document.getElementById("testGantiWarna").className = "small-box bg-yellow";
        }
    </script>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="assets/logo.png">
            </div>
            <div class="col-md-6">
                <h1 style="font-align: center">Receptionist</h1>
            </div>
            <div class="col-md-1">
                <div class="dropdown">
                    <button data-toggle="dropdown" href="#" type="button" class="btn btn-danger btn-circle btn-lg">
                        <i class="glyphicon glyphicon-user"></i>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <p class="hdivider">Ardhanu Bismo</p>
                        <a href="index.html">Log Out</a>
                    </ul>
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <br/>

        <!--row 1-->
        <div class="row">
            <!--spasi-->

            <div class="col-md-1"></div>
            <!--no1-->
            <div class="col-md-2 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-light-blue">
                    <div class="inner">
                        <h3 style="text-align:center">1</h3>
                    </div>
                    <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal1" style="font-size: 20px">
                        <?php echo $_SESSION['status_room1']; ?> <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            
            
            <!-- Modal 1 -->
            <form method="post" action="#">  
            <div class="modal fade" id="myModal1" >
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Room 1</h4>
                        </div>
                        <div class="modal-body inputmodaltengah">
                            <input class="inputgaris" type="text" name="customerName1_receptionist" placeholder="<?php echo $custName1 ?>" />
                        </div>

                        <div class="modal-footer">
                            
                            <input type="submit"  class="btn btn-primary" value="Ok" name="modal1_receptionist"/>
                            
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
                </form>

            <!--no2-->
            <div class="col-md-2 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-light-blue">
                    <div class="inner">
                        <h3 style="text-align:center">2</h3>
                    </div>
                    <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal2" style="font-size: 20px">
                        <?php echo $_SESSION['status2'];?> <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <!-- Modal2 -->
            <form method="post" action="receptionist.php">  
            <div class="modal fade" id="myModal2" >
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Room 2</h4>
                        </div>
                        <div class="modal-body inputmodaltengah">
                            <input class="inputgaris" type="text" name="customerName2_receptionist" placeholder="<?php echo $custName2 ?>" />
                        </div>

                        <div class="modal-footer">
                            
                            <input type="submit"  class="btn btn-primary" value="Ok" name="modal2_receptionist"/>
                            
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>

            <!--no3-->
            <div class="col-md-2 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-light-blue">
                    <div class="inner">
                        <h3 style="text-align:center">3</h3>
                    </div>
                    <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal3" style="font-size: 20px" >
                        Kosong &nbsp; <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <!-- modal3 -->
            <form method="post" action="receptionist.php">  
            <div class="modal fade" id="myModal3" >
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Room 3</h4>
                        </div>
                        <div class="modal-body inputmodaltengah">
                            <input class="inputgaris" type="text" name="customerName3_receptionist" placeholder="<?php echo $custName3 ?>" />
                        </div>

                        <div class="modal-footer">
                            
                            <input type="submit"  class="btn btn-primary" value="Ok" name="modal3_receptionist"/>
                            
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            
            <!--no4-->
            <div class="col-md-2 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-light-blue">
                    <div class="inner">
                        <h3 style="text-align:center">4</h3>
                    </div>
                    <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal4" style="font-size: 20px">
                         Kosong &nbsp; <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- Modal 4 -->
            <form method="post" action="receptionist.php">  
            <div class="modal fade" id="myModal4" >
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Room 4</h4>
                        </div>
                        <div class="modal-body inputmodaltengah">
                            <input class="inputgaris" type="text" name="customerName3_receptionist" placeholder="<?php echo $custName4 ?>" />
                        </div>

                        <div class="modal-footer">
                            
                            <input type="submit"  class="btn btn-primary" value="Ok" name="modal4_receptionist"/>
                            
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>

            <!--no5-->
            <div class="col-md-2 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-light-blue" id ="testGantiWarna">
                    <div class="inner">
                        <h3 style="text-align:center">5</h3>
                    </div>
                    <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal5" style="font-size: 20px" onclick="gantiwarna()" value="Kosong" id="gantiText">
                         <?php echo $status5 ?> <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Modal5-->
            <div class="modal fade" id="myModal5" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Room 5</h4>
                        </div>
                        <div class="modal-body inputmodaltengah">
                            <input class="inputgaris " type="text" name="pengunjung" placeholder="Nama Pengunjung" />
                        </div>
                        <div class="modal-footer">
                            <input type="submit"  class="btn btn-primary" value="Ok"  data-dismiss="modal" onclick="gantiText()" name="modal5_receptionist"/>                            
                            <button type="button" class="btn btn-default" data-dismiss="modal" name="modal5">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--tutup row-->
    </div>







    <script src="js/jquery-ui-1.10.3.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="js/app.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>
</body>

</html>