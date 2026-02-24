<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

function connectDB(){
    $database = ""; // Put in your GCC netid (ex: kgross1)
    $user = ""; // Put in your GCC netid (ex: kgross1)
    $pass = ""; // Put in your MySQL Password (from the email)
    $host = "localhost";
    try {
        $db = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
        echo "db success";    # You'll need to take this echo out when you know it's working
    }
    catch (PDOException $e) {echo $e;}
    return $db; } ?>