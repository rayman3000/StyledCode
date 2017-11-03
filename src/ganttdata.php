<?php

include ("contents_gantt/codebase/connector/db_sqlite3.php");
include ('contents_gantt/codebase/connector/gantt_connector.php');

$dbtype = "PDO";
$res = new PDO("mysql:host=gantt.mysql.database.azure.com; dbname=gantt", "pms131@gantt", "a12345678!");


$gantt = new JSONGanttConnector($res,$dbtype);
$gantt->mix("open", 1);

$gantt->render_links("gantt_links","id","source,target,type");
$gantt->render_table(
    "gantt_tasks",
    "id",
    "start_date,duration,text,progress,sortorder,parent"
);
?>