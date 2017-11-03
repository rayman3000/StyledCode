<?php 


$host = "styledcode-postgresqldbserver.postgres.database.azure.com"; 
$user = "bulgogi1216@styledcode-postgresqldbserver"; 
$pass = "seong!UK$91"; 
$db = "styledcode_postgresqldb";
$port = "5432";
$num = array();
$test = array();    
$result = array();
$severity = array();
$con = pg_connect("host=$host port=$port dbname=$db user=$user password=$pass") or die ("Could not connect to server\n"); 

$query = "SELECT severity, message FROM issues"; 

$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");
$j=0;
while ($r = pg_fetch_array($rs)) {   
    if( in_array( $r['message'] , $num ) )
    {
        $test[$r['message']]++;
    }
    else
    {
        $severity[$j] = $r['severity'];
        $num[$j] =  $r['message'];    
        $test[$r['message']] = 1;
        $j++;
    }
    //$result['data'][] = array($r['message'],$test['data'][$r['message']]);
}

for($i = 0; $i < count($num); $i++) {
    //echo "$num[$i] \n";
    //echo $test[$num[$i]];
    
    $result['data'][] = array($num[$i],$test[$num[$i]]);
}

$rslt = array();
array_push($rslt,$result);
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
  