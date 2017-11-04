<?php
    $host = "styledcode-postgresqldbserver.postgres.database.azure.com";
    $port = "5432";
    $database = "styledcode_temp";
    $user = "bulgogi1216@styledcode-postgresqldbserver";
    $pw = "seong!UK$91";
    
    $con = pg_connect("host=$host port=$port dbname=$database user=$user password=$pw") or die ("Could not connect to server\n"); 
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $department = $_POST['department'];
    $position = $_POST['position'];

    $query = "INSERT INTO accounts (Email, Password, Fname, Lname, Phone, Company, Department, Position) VALUES ('$email', '$password', '$fname', '$lname', '$phone', '$company', '$department', '$position')";

    $result = pg_query($con, $query);

    if($result)
    {
        echo "<script>
        window.location.replace('login.html');
        </script>";
    }
    else {
        echo "<script>
        window.location.replace('SignUp.html');
        </script>";
    }
    
    pg_close($con);
?>