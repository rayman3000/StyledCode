<?php

//include ('../../codebase/connector/db_sqlite3.php');
include ('./codebase/connector/db_pdo.php');
include ('./codebase/connector/db_mysql.php');
include ('./codebase/connector/db_mysqli.php');
include ('./codebase/connector/gantt_connector.php');

// SQLite
//$dbtype = "SQLite3";
//$res = new SQLite3(dirname(__FILE__)."/samples.sqlite");
//$res->busyTimeout(1000);

// Mysql
require_once ("./codebase/connector/db_pdo.php");
$dbtype = "PDO";
$res = new PDO("mysql:host=gantt.mysql.database.azure.com; dbname=gantt", "pms131@gantt", "a12345678!");

?>