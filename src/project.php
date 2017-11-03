<?php
Header("Location:ManageProject.html") ; 

$host = "localhost";     
$port = "5432";
$user = "postgres"; 
$pass = "1234"; 
$db = "postgres"; 
$con = pg_connect("host=$host port = $port dbname=$db user=$user password=$pass") or die ("Could not connect to server\n"); 

session_start();
$admin = $_SESSION['email'];
$team = $_POST['team'];
$project = $_POST['project'];
$category = $_POST['category'];
$datefrom = $_POST['datefrom'];
$newDatefrom = date( "Y-m-d", strtotime( $datefrom ) );

$dateto = $_POST['dateto'];
$newDateto = date( "Y-m-d", strtotime( $dateto ) );
$description = $_POST['description'];
$query = "INSERT INTO projects (team, project, category, datefrom, dateto, description) VALUES ('$team','$project', '$category','$newDatefrom', '$newDateto','$description');";  
$result = pg_query($con, $query) or die("Cannot execute query: $query\n");

$query = "SELECT seq FROM projects ORDER BY seq DESC LIMIT 1"; //가장 최근 생성한 프로젝트 번호 출력
$result = pg_query($con, $query) or die("Cannot execute query: $query\n");
while($row = pg_fetch_array($result))
{
    $query = "INSERT INTO userprojects (email, projectnum) VALUES ('$admin', '$row[0]');";
    $result = pg_query($con, $query) or die("Cannot execute query: $query\n");
}
    




pg_close($con);
?>