<?php

$myarray = array(1,2,3);
array_push($myarray, 4);
$myarray[5] = 6;

# var_dump($myarray[1000]);

$mypets = array("cats" => array("Zelda"), "dragons" => array("Puff", "Smaug", "Tiamat"));

$mypetstable = array(array("name" => "Zelda", "type" => "cat", "age" => 9, "color" => "buff"), array("name" => "Puff", "type" => "dragon", "age" => 65, "color" => "green"));

# var_dump($mypets["cats"][0]);

# var_dump($mypetstable[0]["name"]);

?>