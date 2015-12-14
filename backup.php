 <select name="itemID" class="form-control" id="sell">
                                            <?php
                                                
                                                $_SESSION['itemID'] = $_POST['itemID'];
                                                $dbconnect = mysqli_connect("localhost", "root", "", "izyparty");
                                                $catlist_sql="SELECT * FROM item";
                                                $catlist_qry=mysqli_query($dbconnect,$catlist_sql);
                                                $catlist_rs=mysqli_fetch_assoc($catlist_qry);

                                                do{ ?>
                                                <option value="<?php echo $catlist_rs['item_id']; ?>"> 
                                                    <?php 
                                                        $curentItem = $catlist_rs['item_id'];
                                                        echo $catlist_rs['item_name'];                                                         
                                                    ?>                
                                                </option>                

                                                <?php } while ($catlist_rs=mysqli_fetch_assoc($catlist_qry));
                                                                                            
                                            ?>
                                            </select>


 <div class="col-md-4">
                                    <div>Harga</div>
                                    <div class="form-group">
                                        <label for="usr"></label>
                                        <?php
                                        $buku = $_POST['buku'];
                                        $result = mysql_query("SELECT * FROM item WHERE item_id = '$buku'");
                                        $data = mysql_fetch_array($result);
                                        echo $data['item_price'];
                                        
//                                            echo $_POST['itemID'];
//                                            $itemnow = $_SESSION['itemID'];
//                                            $dbconnect = mysqli_connect("localhost", "root", "", "izyparty");
//                                            $catlist_sql="SELECT item_price FROM item WHERE item_id='$itemnow'";
//                                            $catlist_qry=mysqli_query($dbconnect,$catlist_sql);
                                            //$catlist_rs=mysqli_fetch_assoc($catlist_qry);
                                            //echo $catlist_rs;
                                                                                    
                                            
                                        ?>
<!--                                        <input type="text" class="form-control" id="usr">-->
                                    </div>

                                </div>




<!--BACK UP SELECT-->
<script language="Javascript" type="text/javascript">
         var counter = 1;
         var limit = 3;
         function addInput(divName){
             
                var newdiv = document.createElement('div');
//              newdiv.innerHTML = " <br><input type='text' name='myInputs[]'>"; jadi
             
                newdiv.innerHTML = "<select><option value='volvo' id='items'>Volvo</option></select>";   
                var x = document.getElementById("daftarItem").innerHTML;
                document.getElementById("items").innerHTML = x;
                
                //document.getElementById(divName).appendChild(newdiv);
                counter++;
         }
    </script>

//BACKUP GANTI WARNA DI MODAl
if(<?php $status5=='Isi';?>){
            
            //document.getElementById("gantiText").innerHTML = "Isi";
            document.getElementById("testGantiWarna").className = "small-box bg-yellow";}


 <form method="post" action="receptionist.php">  
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

<form method="post" action="receptionist.php">  
            <div class="modal fade" id="myModal2" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Room 2</h4>
                        </div>
                        <div class="modal-body inputmodaltengah">
                            <input class="inputgaris" type="text" name="customerName2_receptionist" placeholder="<?php echo $custName2 ?>" />
                        </div>

                        <div class="modal-footer">
                            
                            <input type="submit"  class="btn btn-primary" value="Ok" name="modal2_receptionist" data-dismiss="modal"/>
                            
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
</form>