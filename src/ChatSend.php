<?php
    session_start();
    $sender = $_SESSION['email'];
    $roomnum = $_POST['roomnum'];
    $roomname =  $_POST['roomname'];
    $chat =  $_POST['chat'];
    $timestamp = date("n/j G : i");

    $host = "styledcode.postgres.database.azure.com";
    $port = "5432";
    $database = "postgres";
    $user = "pms131@styledcode";
    $pw = "a12345678!";
    
    $con = pg_connect("host=$host port=$port dbname=$database user=$user password=$pw") or die ("Could not connect to server\n"); 

    $query = "INSERT INTO chatlogs (sender, roomnum, roomname, chat, timestamp) VALUES ('$sender', '$roomnum', '$roomname', '$chat', '$timestamp')";

    $result = pg_query($con, $query);

    if($result)
    {
        echo "<script>
        window.location.replace('chat_room.html?roomnum=".$roomnum."&roomname=".$roomname."');        
        </script>";
    }
    else {
        echo 'failure';
    }
    
    pg_close($con);
?>