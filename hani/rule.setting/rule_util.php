<?php
# First Ver.parameter is 1(array of rules)
function _makeRules($_rules)
{
    $_option="-all";
    //$_rules=impolde(" ", $_rules);
    //var_dump($_rules);
    $_rtool=system("./src/makeProfile.sh $_option $_rules");
    //echo $_rtool;
}
?>
