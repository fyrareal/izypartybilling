<?php
    session_start();
    $custName = $_SESSION['customerName1_receptionist'];
    
    $grandOrder = 0;
    
    mysql_connect('localhost', 'root', '');
    mysql_select_db('izyparty');

    // HANDLE Room Name
    $result = mysql_query("SELECT * FROM roomorder JOIN room ON roomorder.room_id=room.room_id WHERE customer_name='$custName'");
    $data = mysql_fetch_array($result);
    $roomName = $data['room_name'];
    
    //echo $data['start'].$data['end']; TESTING BILLING
    
    echo "<h2>Terima kasih !!</h2>";
   
    echo "<p>Nama : $custName</p>";   
    echo "Room : ".$data['room_name']." ".$data['room_type'];
    ?></br><?php
    echo "Biaya : ".$data['room_price']." / jam";
    ?></br></br><?php

    //HANDLE BILLING
    $dteStart = new DateTime($data['start']); 
    $dteEnd   = new DateTime($data['end']); 

        
    $dteDiff  = $dteStart->diff($dteEnd); 
    $hour = $dteDiff->format("%H");
    $minute = $dteDiff->format("%I");
    $second = $dteDiff->format("%S");        
  
    echo "Waktu Penggunaan : ".$hour." jam, ".$minute." menit, ".$second." detik";
    
    //print $dteDiff->format("%H:%I:%S"); ga perlu ditampilin
    ?></br><?php

    $billhour = intval($hour)*$data['room_price'];
    $billminute =  intval($minute)*($data['room_price']*1/60);
    $billsecond = intval($second)*($data['room_price']*1/3600);
    $grandRoom = round(($billhour+$billminute+$billsecond),3);
    echo "Biaya Ruangan : Rp. " .$grandRoom;
    ?></br></br><?php




    ///////
    
    $result = mysql_query("SELECT * FROM ladies_service JOIN ladies ON ladies_service.ladies_id=ladies.ladies_id WHERE customer_name='$custName'");
    $data = mysql_fetch_array($result);
    echo "Ladies : ".$data['ladies_name'];
    ?></br><?php
    echo "Biaya : ".$data['ladies_price']." /jam";
    
    //Ladie
    $ladyhour = intval($hour)*$data['ladies_price'];
    $ladyminute =intval($minute)*($data['ladies_price']*1/60);
    $ladysecond =intval($second)*($data['ladies_price']*1/3600);
    
    ?></br><?php
    $grandLadies = round(($ladyhour+$ladyminute+$ladysecond),3);
    echo "Biaya Ladies : Rp. ". $grandLadies;


    
    ?></br></br><?php
    $result = mysql_query("SELECT * FROM order_dummy JOIN item ON order_dummy.item_id=item.item_id WHERE customer_name='$custName'");
    //$data = mysql_fetch_array($result);
    
    echo "Order : ";
 
    ?></br><?php
    while($data = mysql_fetch_array($result)) {        
        $total = $data['item_price']*$data['order_dummy_quantity'];
        echo $data['item_name']."  ".$data['item_price']." X ".$data['order_dummy_quantity']
        ?></br><?php
        echo "Total : ".$total;        
        $grandOrder+= $total;
        ?></br></br><?php
    }

    echo "Order Total = " . $grandOrder;
    ?></br></br><?php
    $grandTotal = $grandOrder + $grandRoom + $grandLadies;
    
    echo "Grand Total = ".$grandTotal;
    


    
    
?>
