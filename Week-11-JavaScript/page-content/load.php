<?php


$content = random_bytes(6);  // Likely, you'll have something specific in mind for content.

// If you want to get data not through FormData
// php://input gets the raw data that's not in FormData form
$data = json_decode(file_get_contents('php://input'), true);

var_dump($data);
// var_dump also sends stuff back since it displays to the page!

echo $data["exampledata"];

?>