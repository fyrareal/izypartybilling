<?php
    mysql_connect('localhost', 'root', '');
    mysql_select_db('test');
    date_default_timezone_set('Asia/Bangkok');
    $date = date('m/d/y h:i:s a',time());
    
    if(isset($_POST['starto']))
    {     
        echo "AAA";
        mysql_query("INSERT INTO time (start) VALUES ('$date')");
    }
    
    if(isset($_POST['stope']))
    {
        $awal = mysql_query("SELECT * FROM time WHERE time_id=1");
        $data = mysql_fetch_array($awal);
        $start = $data['start'];
        $awal = mysql_query("SELECT * FROM time WHERE time_id=2");
        $data = mysql_fetch_array($awal);
        $end = $data['start'];
        echo $start.$end;
        
        $dteStart = new DateTime($start); 
        $dteEnd   = new DateTime($end); 

        
        $dteDiff  = $dteStart->diff($dteEnd); 
        $hour = $dteDiff->format("%H");
        $minute = $dteDiff->format("%I");
        $second = $dteDiff->format("%S");
        
      
        echo $hour."  ".$minute."  ".$second;
        print $dteDiff->format("%H:%I:%S"); 
    }
//    $date2 = '11/27/15 05:10:00';
//
//    $diff = date_diff($date,$date2);
?>

<html>
    <body>
        <form action="testtime.php" method="post"> name:
        <input type="submit" value="start" name="starto">

        <input type="submit" value="stop" name="stope">
        </form>
    </body>
</html>