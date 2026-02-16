<?php
include("errors-test.php");

print("<p>Testing valid input </p>");

check_colors(array("red"), "red");

print("<p>Testing valid input, longer list </p>");

check_colors(array("red", "yellow"), "yellow");

print("<p>Testing invalid input </p>");

check_colors(array("blue"), "yellow");

print("<p>Testing nonsense input </p>");

check_colors("boo", "boo");

?>