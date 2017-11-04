<?php
    $host = "styledcode.postgres.database.azure.com";
    $port = "5432";
    $database = "postgres";
    $user = "pms131@styledcode";
    $pw = "a12345678!";
    
    $roomnum = $_POST['roomnum'];
    $roomname =  $_POST['roomname'];

    $con = pg_connect("host=$host port=$port dbname=$database user=$user password=$pw") or die ("Could not connect to server\n"); 

    $query = "SELECT * FROM chatlogs WHERE chatlogs.roomname=" . "'$roomname'" . " AND chatlogs.roomnum=" . "$roomnum";
    $result = pg_query($con, $query);
    while($row = pg_fetch_array($result))
    {
        echo '<div class="group-rom">' .
             '<div class="first-part odd">' . $row[1] . '</div>' .
             '<div class="second-part">' . $row[4] . '</div>' .
             '<div class="third-part">' . $row[5] . '</div>' .
             '</div>';
    }
//echo '<script>var objDiv = document.getElementById("message"); objDiv.scrollTop = objDiv.scrollHeight;<script>';
?>