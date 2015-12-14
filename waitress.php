<?php
    
    session_start();

    if(isset($_POST['myInputs[]']))
    {
        
    }

    if(isset($_POST['modal22']))
    {
        $name = $_POST['myInputs'];
        $_SESSION['order']=$name;
        foreach( $name as $key => $n ) {
          print "Order : ".$n;
          ?></br><?php
        }
        
        mysql_connect('localhost', 'root', '');        
        mysql_select_db('izyparty');
        
              
        $custName = $_SESSION['customerName1_receptionist'];
        $result = mysql_query("SELECT * FROM customer WHERE customer_name='$custName'");
        $data = mysql_fetch_array($result);
        if($result === FALSE) { 
            die(mysql_error()); 
        }
        
        $cusID = $data['customer_id'];
        $itemID = $_POST['buku'];
        $itemQTY = $_POST['qty_room2'];
        //LADIES
        $ladiesID =$_POST['ladies'];
        
        echo $cusID;
        mysql_query("INSERT INTO ladies_service (ladies_id,customer_name) VALUES ('$ladiesID','$custName')");
        
       
        mysql_query("INSERT INTO order_dummy (item_id,order_dummy_quantity,customer_name) VALUES ('$itemID','$itemQTY','$custName')");
//        mysql_query("INSERT INTO order (customer_id,item_id,order_quantity) VALUES ('$cusID','$itemID','$itemQTY')");
        

    }
    
    

//    if(isset($_POST['modal1']))
//    {
        $roomID = 2;
        
        mysql_connect('localhost', 'root', '');
        mysql_select_db('izyparty');
        $custName = $_SESSION['customerName1_receptionist'];
        
//        $dbconnect = mysqli_connect("localhost", "root", "", "izyparty");
//        $query2_sql="SELECT * FROM customer WHERE customer_name='$custName'";
//        $query2=mysqli_query($dbconnect,$query2_sql);
//        $query_rs=mysqli_fetch_assoc($query2);
//        echo $query_rs['customer_id'];
        
//        mysql_query("INSERT INTO customer (customer_name) VALUES ('$custName')");
//        $cusIDsql = "SELECT customer.customer_id from customer where customer_name=$custName";
//        mysql_query("INSERT INTO bill(customer_id=$cusIDsql)");
//   }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Waitress</title>
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
</head>

<body>
    
<!--TEST SELECTION-->

    
<!--    HANDLE DROPDOWN-->



<script language="Javascript" type="text/javascript">
	var counter = 1;
     var limit = 3;
     function addInput(divName){
     
          var newdiv = document.createElement('div');
          newdiv.innerHTML = " <br><input type='text' name='myInputs[]'>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     
}
	
</script>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="assets/logo.png">
            </div>
            <div class="col-md-6">
                <h1 style="font-align: center">Waitress</h1>
            </div>
            <div class="col-md-1">
                <div class="dropdown">
                    <button data-toggle="dropdown" href="#" type="button" class="btn btn-danger btn-circle btn-lg">
                        <i class="glyphicon glyphicon-heart"></i>
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
            <!--            menu1-->
            <div class="col-md-2 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-light-blue">
                    <div class="inner">
                        <h3 style="text-align:center">1</h3>
                    </div>
                    <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal1" style="font-size: 20px">
                        Kosong &nbsp; <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            
            
            <!-- Modal 1 -->
            <form method="post" action="waitress.php">  
            <div class="modal fade" id="myModal1" >
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Room 1</h4>
                        </div>
                        <div class="modal-body inputmodaltengah">
                            <input class="inputgaris" type="text" name="customerName1_waitress" placeholder="Nama Pengunjung" />
                        </div>

                        <div class="modal-footer">
                              
                            <input type="submit"  class="btn btn-primary" value="Ok" name="modal1"/>
                            
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
                        ISI &nbsp; <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <!-- Modal2 -->
            <form method="post" action="waitress.php" name="modal2_waitress">  
            <div class="modal fade" id="myModal2" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Room 1</h4>
                        </div>
                        <!--                        isi modal-->
                        <div class="modal-body">
                            <h4>Nama Pengunjung :
                               <?php echo $custName; ?>                                
                            </h4>
                            
                            <div class="row">
                                <div class="col-md-6">
                                <label for="sel1">Ladies :</label>
                                        </br>
                                        <select name="ladies">
                                                <?php
                                                // koneksi ke database
                                                mysql_connect('localhost', 'root', '');
                                                // pilih database
                                                mysql_select_db('izyparty');
                                                // melakukan query 
                                                $result = mysql_query("SELECT * FROM ladies");

                                                while($data = mysql_fetch_array($result)) {

                                                    echo "<option value='$data[ladies_id]'>$data[ladies_name]</option>";
                                                }
                                                ?>
                                        </select>  
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div></div>
                                    <div class="form-group">
<!--                                        <form method="post" action="">-->
                                               
                                        
                                        </br>
                                        <label for="sel1">Food and Drink :</label>
                                        </br>
                                        <select name="buku" id="daftarItem">
                                                <?php
                                                // koneksi ke database
                                                mysql_connect('localhost', 'root', '');
                                                // pilih database
                                                mysql_select_db('izyparty');
                                                // melakukan query 
                                                $result = mysql_query("SELECT * FROM item");

                                                while($data = mysql_fetch_array($result)) {

                                                    echo "<option value='$data[item_id]'>$data[item_name]</option>";
                                                }
                                                ?>
                                        </select>  
                              

                                 <div id="dynamicInput">
                                      Entry 1<br><input type="text" name="myInputs[]">
                                 </div>
                                 <input type="button" value="Add another text input" onClick="addInput('dynamicInput');">
                                               
<!--                                            </form>-->
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div></div>
                                    <div class="form-group">
                                         </br>
                                        <label for="sel1">Jumlah :</label> 
                                    </br>
                                        <input type="text" id="usr" name="qty_room2">
                                    </div>
                                </div>
                               
                            </div>
                        </div>

                        <div class="modal-footer">
                            <input type="submit"  class="btn btn-primary" value="Ok" name="modal22"/>
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
           <form method="post" action="waitress.php" name="modal2_waitress">  
            <div class="modal fade" id="myModal3" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Room 1</h4>
                        </div>
                        <!--                        isi modal-->
                        <div class="modal-body">
                            <h4>Nama Pengunjung :
                               <?php echo $custName; ?>                                
                            </h4>
                            
                           
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div></div>
                                    <div class="form-group">
<!--                                        <form method="post" action="">-->
                                               
                                        
                                        </br>
                                        <label for="sel1">Food and Drink :</label>
                                        </br>
                                        <select name="buku">
                                                <?php
                                                // koneksi ke database
                                                mysql_connect('localhost', 'root', '');
                                                // pilih database
                                                mysql_select_db('izyparty');
                                                // melakukan query 
                                                $result = mysql_query("SELECT * FROM item");

                                                while($data = mysql_fetch_array($result)) {

                                                    echo "<option value='$data[item_id]'>$data[item_name]</option>";
                                                }
                                                ?>
                                        </select>                                            
                                               
<!--                                            </form>-->
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div></div>
                                    <div class="form-group">
                                         </br>
                                        <label for="sel1">Jumlah :</label> 
                                    </br>
                                        <input type="text" id="usr" name="qty_room2">
                                    </div>
                                </div>
                               
                            </div>
                        </div>

                        <div class="modal-footer">
                            <input type="submit"  class="btn btn-primary" value="Ok" name="modal22"/>
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
            <div class="modal fade" id="myModal4" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Data</h4>
                        </div>
                        <div class="modal-body inputmodaltengah">
                            <input class="inputgaris " type="text" name="pengunjung" placeholder="Nama Pengunjung" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--no5-->
            <div class="col-md-2 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-light-blue">
                    <div class="inner">
                        <h3 style="text-align:center">5</h3>
                    </div>
                    <a href="#" class="small-box-footer" data-toggle="modal" data-target="#myModal5" style="font-size: 20px">
                        Kosong &nbsp; <i class="fa fa-arrow-circle-right"></i>
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
                            <h4 class="modal-title">Data</h4>
                        </div>
                        <div class="modal-body inputmodaltengah">
                            <input class="inputgaris " type="text" name="pengunjung" placeholder="Nama Pengunjung" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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