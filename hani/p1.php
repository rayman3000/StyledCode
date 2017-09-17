<?php
/*
* simple Indent checker 
*/
function indentChecker($text) {
  $INDENT_SIZE = 2;
  $indent_chk = $INDENT_SIZE;
  //$indent_level = 1;

  $handle = fopen("./sample_js.js", "r");
  //$ending = ['\n'];//, "\t"];

  //while($buffer = stream_get_line($handle, 4096, "\n")) {
  while($buffer = fgets($handle)) {

    $count = strspn($buffer, "\t");

  //Resize indents_chk by indent_level
    if(strspn($buffer, "{")) {
      $indent_chk += $INDENT_SIZE;
    } else if(strspn($buffer, "}")) {
      $indent_chk -= $INDENT_SiZE;
    } else {
      //Indent Checking
      if($count > $indent_chk) {
        echo '(E1) :';
      } else {
      echo '(OK) :';//$count.':';
      }
      //print_source code with Check result
      echo $buffer.'<br>';
    }
  }
  fclose($handle);
}
?>
