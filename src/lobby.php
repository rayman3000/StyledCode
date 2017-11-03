l<?php
                            $host = "localhost";
                            $port = "5432";
                            $database = "postgres";
                            $user = "postgres";
                            $pw = "1234";
    
                            $con = pg_connect("host=$host port=$port dbname=$database user=$user password=$pw") or die ("Could not connect to server\n"); 
                            $query = "SELECT * FROM rooms;";
                            $result = pg_query($con, $query);
                            while($row = pg_fetch_array($result))
                            {
                                echo $row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3];
                                echo '<br>';
                            }


                          ?>