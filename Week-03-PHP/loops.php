<?php

$mycount = 10;
while ($mycount > 0){
    echo $mycount;
    echo "... ";
    $mycount--;
}

echo "Happy New Year!";

echo " for loop 1: ";

$myarray = array("a","b","c");
for ($myindex = 0; $myindex < count($myarray); $myindex++){
    echo $myarray[$myindex];
}

echo " foreach loop 1: ";

foreach ($myarray as $value){
    echo $value;
}

echo " for loop 2: ";

for ($mycount = 10; $mycount; $mycount--){
    echo $mycount;
}

echo " foreach loop 2: ";

$mycount = array(1,2,3,4,5,6,7,8,9,10);
foreach ($mycount as $number){
    echo $number;
}

?>