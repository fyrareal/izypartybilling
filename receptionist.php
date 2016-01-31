<?php
    session_start();
    
if(!isset($_SESSION['receptionist']))
    $_SESSION['receptionist']="Receptionist";
//    SETTING DEFAULT VALUE FOR CUSTOMER
    if(!isset($_SESSION['custName1_receptionist'])){
        
        $_SESSION['customerName1_receptionist']="";
    }
    if(!isset($_SESSION['custName2_receptionist'])){
        
        $_SESSION['customerName2_receptionist']="";
    }


//    SETTING DEFAUL VALUE FOR STATUS
    if(!isset($_SESSION['status_room1'])){$_SESSION['status_room1']='Kosong';}
    if(!isset($_SESSION['status_room2'])){$_SESSION['status_room2']='Isi';}
    $_SESSION['status_room2']='Isi';

    mysql_connect('localhost', 'root', '');
    mysql_select_db('izyparty');        

    //Status Ruangan Karaoke
//    $_SESSION['status_room1']='Kosong';$_SESSION['status2']='Kosong';
    $status3='Kosong';$status4='Kosong';$status5='Kosong';
    $status6='Kosong';$status7='Kosong';$status8='Kosong';$status9='Kosong';$status10='Kosong';
    $status11='Kosong';$status12='Kosong';$status13='Kosong';$status14='Kosong';$status15='Kosong';
    $status16='Kosong';$status17='Kosong';$status18='Kosong';$status19='Kosong';$status20='Kosong';
    


    
    

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
            
            //COBA GANTI WARNA
// echo "<script> gantiWarna(); </script>";
        }else if ($_SESSION['status_room1']==  'Isi')
        {
            
//           echo "<script> gantiWarna(); </script>";
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

    <body id="header">

        <script type='text/javascript'>
            function gantiText() {
                document.getElementById("gantiText").innerHTML = "Isi";
                document.getElementById("testGantiWarna").className = "small-box bg-yellow";
            }

            function gantiWarna() {
                document.getElementById("testGantiWarna1").className = "small-box bg-yellow";
            }
        </script>

        
        
<nav class="navbar navbar-fixed-top custom-navbar">
<!--  <div class="container-fluid">-->
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="width:25%;">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"> <img class="logo" src="assets/logo.png"></a>
    </div>

  
   
      <ul class="nav navbar-nav" style="width:45%;text-align:center;">        
       <h1><strong>RECEPTIONIST</strong></h1>
      </ul>
     
      <ul class="nav navbar-nav navbar-right" style="width:10%;margin-top:10px;">

          <div class="dropdown">
                        <button data-toggle="dropdown" href="#" type="button" class="btn btn-warning btn-circle btn-lg">
                            <i class="glyphicon glyphicon-user"></i>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <p class="hdivider">
                                <?php echo $_SESSION['receptionist'];?>
                            </p>
                            <a href="index.php">Log Out</a>
                        </ul>
                    </div>
      </ul>
    </div><!-- /.navbar-collapse -->

</nav>

<!--        <div class="container">-->
<!--
            <div class="row">
                <div class="col-md-4">
                    <img class="logo" src="assets/logo.png">
                </div>
                <div class="col-md-6">
                    <h1 style="font-align: center">Receptionist</h1>
                </div>
                <div class="col-md-1">
                    <div class="dropdown">
                        <button data-toggle="dropdown" href="#" type="button" class="btn btn-warning btn-circle btn-lg">
                            <i class="glyphicon glyphicon-user"></i>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <p class="hdivider">
                                <?php echo $_SESSION['receptionist'];?>
                            </p>
                            <a href="index.php">Log Out</a>
                        </ul>
                    </div>
                </div>
            </div>
-->
            <br/>
            <br/>
            <br/>

            <!--row 1-->
            <div class="row">
                <!--spasi-->

                <div class="col-sm-2 col-md-2 navigation" style="position:fixed;">
                    <a class="page-scroll" href="#header">
                        <button class="btn btn-warning" type="button"><span>01-15</span></button>         
                    </a>
                    
                    <a class="page-scroll" href="#section2">
                        <button class="btn btn-warning" type="button"><span>16-30</span></button>
                    </a>
                    <a class="page-scroll" href="#section3">
                        <button class="btn btn-warning" type="button"><span>31-45</span></button>
                    </a>


                </div>
              
                <div class="col-sm-10 col-md-10 content">
                    <section id="section1" style="height:500px;">
                    <div class="row">

                        <!--no1-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-light-blue" id="tesGantiWarna1">
                                <div class="inner">
                                    <h3 style="text-align:center">1</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal1" style="font-size: 20px">
                                    <?php echo $_SESSION['status_room1']; ?> <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>


                        <!-- Modal 1 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal1">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 1</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName1_receptionist" placeholder="<?php echo $_SESSION['customerName1_receptionist'] ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal1_receptionist" onClick="gantiWarna()" />

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!--no2-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3 style="text-align:center">2</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal2" style="font-size: 20px">
                                    <?php echo $_SESSION['status_room2'];?> <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Modal2 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal2">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 2</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName2_receptionist" placeholder="<?php echo $_SESSION['customerName2_receptionist']; ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal2_receptionist" />

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
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal3" style="font-size: 20px">
                        Kosong &nbsp; <i class="fa fa-arrow-circle-right"></i>
                       

                    </a>
                            </div>
                        </div>

                        <!-- modal3 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal3">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 3</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName3_receptionist" placeholder="<?php echo $_SESSION['customerName2_receptionist']; ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal3_receptionist" />

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
                            <div class="modal fade" id="myModal4">
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

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal4_receptionist" />

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!--no5-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-light-blue" id="testGantiWarna">
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
                                        <input type="submit" class="btn btn-primary" value="Ok" data-dismiss="modal" onclick="gantiText()" name="modal5_receptionist" />
                                        <button type="button" class="btn btn-default" data-dismiss="modal" name="modal5">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--tutup row-->
                    
                    <div class="row">

                        <!--no1-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-light-blue" id="tesGantiWarna1">
                                <div class="inner">
                                    <h3 style="text-align:center">6</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal1" style="font-size: 20px">
                                    Kosong <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>


                        <!-- Modal 1 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal1">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 6</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName1_receptionist" placeholder="<?php echo $_SESSION['customerName1_receptionist'] ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal1_receptionist" onClick="gantiWarna()" />

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
                                    <h3 style="text-align:center">7</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal2" style="font-size: 20px">
                                    Kosong<i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Modal2 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal2">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 7</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName2_receptionist" placeholder="<?php echo $_SESSION['customerName2_receptionist']; ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal2_receptionist" />

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
                                    <h3 style="text-align:center">8</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal3" style="font-size: 20px">
                        Kosong &nbsp; <i class="fa fa-arrow-circle-right"></i>
                       

                    </a>
                            </div>
                        </div>

                        <!-- modal3 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal3">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 8</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName3_receptionist" placeholder="<?php echo $_SESSION['customerName2_receptionist']; ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal3_receptionist" />

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
                                    <h3 style="text-align:center">9</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal4" style="font-size: 20px">
                         Kosong &nbsp; <i class="fa fa-arrow-circle-right"></i>
                    </a>
                            </div>
                        </div>
                        <!-- Modal 4 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal4">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 9</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName3_receptionist" placeholder="<?php echo $custName4 ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal4_receptionist" />

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!--no5-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-light-blue" id="testGantiWarna">
                                <div class="inner">
                                    <h3 style="text-align:center">10</h3>
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
                                        <h4 class="modal-title">Room 10</h4>
                                    </div>
                                    <div class="modal-body inputmodaltengah">
                                        <input class="inputgaris " type="text" name="pengunjung" placeholder="Nama Pengunjung" />
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary" value="Ok" data-dismiss="modal" onclick="gantiText()" name="modal5_receptionist" />
                                        <button type="button" class="btn btn-default" data-dismiss="modal" name="modal5">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--tutup row-->
                    
                    <div class="row">

                        <!--no1-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-light-blue" id="tesGantiWarna1">
                                <div class="inner">
                                    <h3 style="text-align:center">11</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal1" style="font-size: 20px">
                                    Kosong <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>


                        <!-- Modal 1 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal1">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 11</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName1_receptionist" placeholder="<?php echo $_SESSION['customerName1_receptionist'] ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal1_receptionist" onClick="gantiWarna()" />

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
                                    <h3 style="text-align:center">12</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal2" style="font-size: 20px">
                                   Kosong <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Modal2 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal2">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 12</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName2_receptionist" placeholder="<?php echo $_SESSION['customerName2_receptionist']; ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal2_receptionist" />

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
                                    <h3 style="text-align:center">13</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal3" style="font-size: 20px">
                        Kosong &nbsp; <i class="fa fa-arrow-circle-right"></i>
                       

                    </a>
                            </div>
                        </div>

                        <!-- modal3 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal3">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 13</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName3_receptionist" placeholder="<?php echo $_SESSION['customerName2_receptionist']; ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal3_receptionist" />

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
                                    <h3 style="text-align:center">14</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal4" style="font-size: 20px">
                         Kosong &nbsp; <i class="fa fa-arrow-circle-right"></i>
                    </a>
                            </div>
                        </div>
                        <!-- Modal 4 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal4">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 14</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName3_receptionist" placeholder="<?php echo $custName4 ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal4_receptionist" />

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!--no5-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-light-blue" id="testGantiWarna">
                                <div class="inner">
                                    <h3 style="text-align:center">15</h3>
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
                                        <h4 class="modal-title">Room 15</h4>
                                    </div>
                                    <div class="modal-body inputmodaltengah">
                                        <input class="inputgaris " type="text" name="pengunjung" placeholder="Nama Pengunjung" />
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary" value="Ok" data-dismiss="modal" onclick="gantiText()" name="modal5_receptionist" />
                                        <button type="button" class="btn btn-default" data-dismiss="modal" name="modal5">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--tutup row-->
                    </section>
                    
                    <section id="section2" style="height:500px;">
                    <div class="row">

                        <!--no1-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-light-blue" id="tesGantiWarna1">
                                <div class="inner">
                                    <h3 style="text-align:center">16</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal1" style="font-size: 20px">
                                    Kosong <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>


                        <!-- Modal 1 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal1">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 16</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName1_receptionist" placeholder="<?php echo $_SESSION['customerName1_receptionist'] ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal1_receptionist" onClick="gantiWarna()" />

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!--no2-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3 style="text-align:center">17</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal2" style="font-size: 20px">
                                    <?php echo $_SESSION['status_room2'];?> <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Modal2 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal2">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 17</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName2_receptionist" placeholder="<?php echo $_SESSION['customerName2_receptionist']; ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal2_receptionist" />

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
                                    <h3 style="text-align:center">18</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal3" style="font-size: 20px">
                        Kosong &nbsp; <i class="fa fa-arrow-circle-right"></i>
                       

                    </a>
                            </div>
                        </div>

                        <!-- modal3 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal3">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 18</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName3_receptionist" placeholder="<?php echo $_SESSION['customerName2_receptionist']; ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal3_receptionist" />

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
                                    <h3 style="text-align:center">19</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal4" style="font-size: 20px">
                         Kosong &nbsp; <i class="fa fa-arrow-circle-right"></i>
                    </a>
                            </div>
                        </div>
                        <!-- Modal 4 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal4">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 19</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName3_receptionist" placeholder="<?php echo $custName4 ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal4_receptionist" />

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!--no5-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-light-blue" id="testGantiWarna">
                                <div class="inner">
                                    <h3 style="text-align:center">20</h3>
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
                                        <h4 class="modal-title">Room 20</h4>
                                    </div>
                                    <div class="modal-body inputmodaltengah">
                                        <input class="inputgaris " type="text" name="pengunjung" placeholder="Nama Pengunjung" />
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary" value="Ok" data-dismiss="modal" onclick="gantiText()" name="modal5_receptionist" />
                                        <button type="button" class="btn btn-default" data-dismiss="modal" name="modal5">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--tutup row-->
                    
                    <div class="row">

                        <!--no1-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-light-blue" id="tesGantiWarna1">
                                <div class="inner">
                                    <h3 style="text-align:center">21</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal1" style="font-size: 20px">
                                    Kosong <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>


                        <!-- Modal 1 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal1">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 21</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName1_receptionist" placeholder="<?php echo $_SESSION['customerName1_receptionist'] ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal1_receptionist" onClick="gantiWarna()" />

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
                                    <h3 style="text-align:center">22</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal2" style="font-size: 20px">
                                   Kosong<i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Modal2 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal2">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 22</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName2_receptionist" placeholder="<?php echo $_SESSION['customerName2_receptionist']; ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal2_receptionist" />

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
                                    <h3 style="text-align:center">23</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal3" style="font-size: 20px">
                        Kosong &nbsp; <i class="fa fa-arrow-circle-right"></i>
                       

                    </a>
                            </div>
                        </div>

                        <!-- modal3 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal3">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 23</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName3_receptionist" placeholder="<?php echo $_SESSION['customerName2_receptionist']; ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal3_receptionist" />

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
                                    <h3 style="text-align:center">24</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal4" style="font-size: 20px">
                         Kosong &nbsp; <i class="fa fa-arrow-circle-right"></i>
                    </a>
                            </div>
                        </div>
                        <!-- Modal 4 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal4">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 24</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName3_receptionist" placeholder="<?php echo $custName4 ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal4_receptionist" />

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!--no5-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-light-blue" id="testGantiWarna">
                                <div class="inner">
                                    <h3 style="text-align:center">25</h3>
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
                                        <h4 class="modal-title">Room 25</h4>
                                    </div>
                                    <div class="modal-body inputmodaltengah">
                                        <input class="inputgaris " type="text" name="pengunjung" placeholder="Nama Pengunjung" />
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary" value="Ok" data-dismiss="modal" onclick="gantiText()" name="modal5_receptionist" />
                                        <button type="button" class="btn btn-default" data-dismiss="modal" name="modal5">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--tutup row-->
                    
                    <div class="row">

                        <!--no1-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-light-blue" id="tesGantiWarna1">
                                <div class="inner">
                                    <h3 style="text-align:center">26</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal1" style="font-size: 20px">
                                    Kosong <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>


                        <!-- Modal 1 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal1">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 26</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName1_receptionist" placeholder="<?php echo $_SESSION['customerName1_receptionist'] ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal1_receptionist" onClick="gantiWarna()" />

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!--no2-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3 style="text-align:center">27</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal2" style="font-size: 20px">
                                    <?php echo $_SESSION['status_room2'];?> <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Modal2 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal2">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 27</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName2_receptionist" placeholder="<?php echo $_SESSION['customerName2_receptionist']; ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal2_receptionist" />

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
                                    <h3 style="text-align:center">28</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal3" style="font-size: 20px">
                        Kosong &nbsp; <i class="fa fa-arrow-circle-right"></i>
                       

                    </a>
                            </div>
                        </div>

                        <!-- modal3 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal3">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 28</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName3_receptionist" placeholder="<?php echo $_SESSION['customerName2_receptionist']; ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal3_receptionist" />

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
                                    <h3 style="text-align:center">29</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal4" style="font-size: 20px">
                         Kosong &nbsp; <i class="fa fa-arrow-circle-right"></i>
                    </a>
                            </div>
                        </div>
                        <!-- Modal 4 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal4">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 29</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName3_receptionist" placeholder="<?php echo $custName4 ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal4_receptionist" />

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!--no5-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-light-blue" id="testGantiWarna">
                                <div class="inner">
                                    <h3 style="text-align:center">30</h3>
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
                                        <h4 class="modal-title">Room 30</h4>
                                    </div>
                                    <div class="modal-body inputmodaltengah">
                                        <input class="inputgaris " type="text" name="pengunjung" placeholder="Nama Pengunjung" />
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary" value="Ok" data-dismiss="modal" onclick="gantiText()" name="modal5_receptionist" />
                                        <button type="button" class="btn btn-default" data-dismiss="modal" name="modal5">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--tutup row-->
                       
                    </section>

                    <section id="section3" style="height:500px;">
                    <div class="row">

                        <!--no1-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-light-blue" id="tesGantiWarna1">
                                <div class="inner">
                                    <h3 style="text-align:center">31</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal1" style="font-size: 20px">
                                    <?php echo $_SESSION['status_room1']; ?> <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>


                        <!-- Modal 1 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal1">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 31</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName1_receptionist" placeholder="<?php echo $_SESSION['customerName1_receptionist'] ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal1_receptionist" onClick="gantiWarna()" />

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!--no2-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3 style="text-align:center">32</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal2" style="font-size: 20px">
                                    <?php echo $_SESSION['status_room2'];?> <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Modal2 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal2">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 32</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName2_receptionist" placeholder="<?php echo $_SESSION['customerName2_receptionist']; ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal2_receptionist" />

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
                                    <h3 style="text-align:center">33</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal3" style="font-size: 20px">
                        Kosong &nbsp; <i class="fa fa-arrow-circle-right"></i>
                       

                    </a>
                            </div>
                        </div>

                        <!-- modal3 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal3">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 33</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName3_receptionist" placeholder="<?php echo $_SESSION['customerName2_receptionist']; ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal3_receptionist" />

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
                                    <h3 style="text-align:center">34</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal4" style="font-size: 20px">
                         Kosong &nbsp; <i class="fa fa-arrow-circle-right"></i>
                    </a>
                            </div>
                        </div>
                        <!-- Modal 4 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal4">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 34</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName3_receptionist" placeholder="<?php echo $custName4 ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal4_receptionist" />

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!--no5-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-light-blue" id="testGantiWarna">
                                <div class="inner">
                                    <h3 style="text-align:center">35</h3>
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
                                        <h4 class="modal-title">Room 35</h4>
                                    </div>
                                    <div class="modal-body inputmodaltengah">
                                        <input class="inputgaris " type="text" name="pengunjung" placeholder="Nama Pengunjung" />
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary" value="Ok" data-dismiss="modal" onclick="gantiText()" name="modal5_receptionist" />
                                        <button type="button" class="btn btn-default" data-dismiss="modal" name="modal5">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--tutup row-->
                    
                    <div class="row">

                        <!--no1-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-light-blue" id="tesGantiWarna1">
                                <div class="inner">
                                    <h3 style="text-align:center">36</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal1" style="font-size: 20px">
                                    <?php echo $_SESSION['status_room1']; ?> <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>


                        <!-- Modal 1 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal1">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 36</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName1_receptionist" placeholder="<?php echo $_SESSION['customerName1_receptionist'] ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal1_receptionist" onClick="gantiWarna()" />

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!--no2-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3 style="text-align:center">37</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal2" style="font-size: 20px">
                                    <?php echo $_SESSION['status_room2'];?> <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Modal2 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal2">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 37</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName2_receptionist" placeholder="<?php echo $_SESSION['customerName2_receptionist']; ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal2_receptionist" />

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
                                    <h3 style="text-align:center">38</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal3" style="font-size: 20px">
                        Kosong &nbsp; <i class="fa fa-arrow-circle-right"></i>
                       

                    </a>
                            </div>
                        </div>

                        <!-- modal3 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal3">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 38</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName3_receptionist" placeholder="<?php echo $_SESSION['customerName2_receptionist']; ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal3_receptionist" />

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
                                    <h3 style="text-align:center">39</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal4" style="font-size: 20px">
                         Kosong &nbsp; <i class="fa fa-arrow-circle-right"></i>
                    </a>
                            </div>
                        </div>
                        <!-- Modal 4 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal4">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 39</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName3_receptionist" placeholder="<?php echo $custName4 ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal4_receptionist" />

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!--no5-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-light-blue" id="testGantiWarna">
                                <div class="inner">
                                    <h3 style="text-align:center">40</h3>
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
                                        <h4 class="modal-title">Room 40</h4>
                                    </div>
                                    <div class="modal-body inputmodaltengah">
                                        <input class="inputgaris " type="text" name="pengunjung" placeholder="Nama Pengunjung" />
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary" value="Ok" data-dismiss="modal" onclick="gantiText()" name="modal5_receptionist" />
                                        <button type="button" class="btn btn-default" data-dismiss="modal" name="modal5">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--tutup row-->
                    
                    <div class="row">

                        <!--no1-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-light-blue" id="tesGantiWarna1">
                                <div class="inner">
                                    <h3 style="text-align:center">41</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal1" style="font-size: 20px">
                                    <?php echo $_SESSION['status_room1']; ?> <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>


                        <!-- Modal 1 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal1">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 41</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName1_receptionist" placeholder="<?php echo $_SESSION['customerName1_receptionist'] ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal1_receptionist" onClick="gantiWarna()" />

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!--no2-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3 style="text-align:center">42</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal2" style="font-size: 20px">
                                    <?php echo $_SESSION['status_room2'];?> <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Modal2 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal2">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 42</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName2_receptionist" placeholder="<?php echo $_SESSION['customerName2_receptionist']; ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal2_receptionist" />

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
                                    <h3 style="text-align:center">43</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal3" style="font-size: 20px">
                        Kosong &nbsp; <i class="fa fa-arrow-circle-right"></i>
                       

                    </a>
                            </div>
                        </div>

                        <!-- modal3 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal3">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 43</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName3_receptionist" placeholder="<?php echo $_SESSION['customerName2_receptionist']; ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal3_receptionist" />

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
                                    <h3 style="text-align:center">44</h3>
                                </div>
                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal4" style="font-size: 20px">
                         Kosong &nbsp; <i class="fa fa-arrow-circle-right"></i>
                    </a>
                            </div>
                        </div>
                        <!-- Modal 4 -->
                        <form method="post" action="receptionist.php">
                            <div class="modal fade" id="myModal4">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Room 44</h4>
                                        </div>
                                        <div class="modal-body inputmodaltengah">
                                            <input class="inputgaris" type="text" name="customerName3_receptionist" placeholder="<?php echo $custName4 ?>" />
                                        </div>

                                        <div class="modal-footer">

                                            <input type="submit" class="btn btn-primary" value="Ok" name="modal4_receptionist" />

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!--no5-->
                        <div class="col-md-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-light-blue" id="testGantiWarna">
                                <div class="inner">
                                    <h3 style="text-align:center">45</h3>
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
                                        <h4 class="modal-title">Room 45</h4>
                                    </div>
                                    <div class="modal-body inputmodaltengah">
                                        <input class="inputgaris " type="text" name="pengunjung" placeholder="Nama Pengunjung" />
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary" value="Ok" data-dismiss="modal" onclick="gantiText()" name="modal5_receptionist" />
                                        <button type="button" class="btn btn-default" data-dismiss="modal" name="modal5">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--tutup row-->
                    </section>
                </div>
            </div>
           





<!--        </div>-->







        <script src="js/jquery-ui-1.10.3.min.js"></script>
        <!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>-->
        <script src="js/jquerry-2.0.2.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/app.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="js/scrolling-nav.js" type="text/javascript"></script>
        <script src="js/jquery.easing.min.js" type="text/javascript"></script>
        <script src="js/jquery.js" type="text/javascript"></script>
<!--
        <script>
            $(function () {
                $('a.page-scroll').bind('click', function (event) {
                    var $anchor = $(this);
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1500, 'easeInOutExpo');
                    event.preventDefault();
                });
            });
        </script>
-->
    </body>

    </html>
