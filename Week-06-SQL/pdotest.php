<?php
include 'dbconfig.php';
$db = connectDB();
// $db->query('INSERT INTO example (lastname, firstname) VALUES ("Barrancotta", "Dan");');

// $insert_user = $db->prepare("INSERT INTO example (lastname, firstname, favNumber) VALUES (?, ?, ?);");
// $insert_user->execute(array("Barrancotta", "Dan", 42));


// check that they're not empty
// check that they're the right type
// $lastname = $_POST["lastname"];
// $firstname = $_POST["firstname"];
// $favNumber = $_POST["favNumber"];
// if(validate_name_input($lastname) and validate_name_input($firstname) and (gettype($favNumber) == "float")){
//     $insert_user->execute(array($lastname, $firstname, $favNumber));
// } else{
//     echo "Whoops, bad data!";
// }

// function validate_name_input($nametext){
//     if(gettype($nametext) == "string"){
//         return True;
//     }
//     else{
//         return False;
//     }
// }


$select_data = $db->prepare("SELECT * FROM example;");
$select_data->execute();

$fetch_example = $select_data->fetchAll();
var_dump($fetch_example);

?>