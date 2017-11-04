l<?php
                            $host = "styledcode-postgresqldbserver.postgres.database.azure.com";
    $port = "5432";
    $database = "styledcode_temp";
    $user = "bulgogi1216@styledcode-postgresqldbserver";
    $pw = "seong!UK$91";
    
                            $con = pg_connect("host=$host port=$port dbname=$database user=$user password=$pw") or die ("Could not connect to server\n"); 
                            $query = "SELECT * FROM rooms;";
                            $result = pg_query($con, $query);
                            while($row = pg_fetch_array($result))
                            {
                                echo $row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3];
                                echo '<br>';
                            }


                          ?>