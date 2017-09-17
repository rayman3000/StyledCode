<?php
include_once("./rule_util.php");

if(isset($_POST['rules']))
{
  $a=implode(":", $_POST['rules']);
  //var_dump($_POST['rules']);
  //var_dump($a);
  //echo "<script>console.log($a);</script>";
} else {
  echo "<script>console.log('NO RECEIVED');</script>";
}
_makeRules($a);
?>
