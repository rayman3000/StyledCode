<?php 


$host = "styledcode-postgresqldbserver.postgres.database.azure.com"; 
$user = "bulgogi1216@styledcode-postgresqldbserver"; 
$pass = "seong!UK$91"; 
$db = "styledcode_postgresqldb";
$port = "5432";

$severity = array('MAJOR', 'MINOR', 'CRITICAL', 'BLOCKER');
$num = array(0, 0, 0, 0);
$drilldown = array('MAJOR', 'MINOR', 'CRITICAL', 'BLOCKER');
$con = pg_connect("host=$host port=$port dbname=$db user=$user password=$pass") or die ("Could not connect to server\n"); 

$query = "SELECT severity, issue_type FROM issues"; 

$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");

while ($row = pg_fetch_row($rs)) {
    if($row[0] == $severity[0])
        $num[0]++;
    else if($row[0] == $severity[1])
        $num[1]++;
    else if($row[0] == $severity[2])
        $num[2]++;
    else
        $num[3]++;    
}
for($i=0; $i<4; $i++) {
    $rows['data'][] = array('name' => $severity[$i], 'y' => $num[$i], 'drilldown' => $severity[$i]);
}
$rslt = array();
array_push($rslt,$rows);
print json_encode($rslt, JSON_NUMERIC_CHECK);

pg_close($con); 


/*
$result = mysqli_query($con,"SELECT name, number FROM name");
$rows = array();
//$rows['type'] = 'pie';
//$rows['name'] = 'Revenue';
//$rows['innerSize'] = '50%';
while ($r = mysqli_fetch_array($result)) {
    $rows['data'][] = array($r['name'], $r['number']);    
}
$rslt = array();
array_push($rslt,$rows);
print json_encode($rslt, JSON_NUMERIC_CHECK);
mysqli_close($con);
*/

?> 
  