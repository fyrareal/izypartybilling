<?php
        session_start();
        $custName = $_SESSION['customerName1_receptionist'];
        $itemID = $_POST['buku'];
        $itemQTY = $_POST['qty_room2'];
        echo "aaaaa";
        mysql_connect('localhost', 'root', '');        
        mysql_select_db('izyparty');
        mysql_query("INSERT INTO order (customer_id, item_id, order_quantity) VALUES ('$custName',$itemID,$itemQTY)");
        $sql = "INSERT INTO order (customer_id,item_id,order_quantity) VALUES ('$custName',$itemID,$itemQTY)";
echo $sql;
?>