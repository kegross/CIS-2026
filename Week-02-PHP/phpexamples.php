<?php

var_dump(3.3*1 == 3.3);
var_dump(3.3*2 == 6.6);
var_dump(3.3*3 == 9.9);

$mynum = 3;

if ($mynum == 6){ echo "it's too early";}
elseif ($mynum == 9) {echo "morning";}
elseif ($mynum == 12) {echo "noon";}
elseif ($mynum == 15) {echo "afternoon";}
elseif ($mynum == 18) {echo "evening";}
elseif ($mynum == 3) {echo "it's too late";}

switch ($mynum){
    case 3: echo "it's too late"; break;
    case 6: echo "it's too early"; break;
    case 9: echo "morning"; break;
    case 12: echo "noon"; break;
    case 15: "afternoon"; break;
    case 18: echo "evening"; break;
}

# switch follows more like a set of if/elseif statements, if all if/elseif statements are equality
?>