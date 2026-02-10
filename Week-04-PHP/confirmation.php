<!doctype html>
    <html lang="en-US">
    <head>
    <meta charset="utf-8" />
    <title>Example Web Form Submission</title>
    </head>
    <body>
        <main>

<?php

function password_checker($password){
    if(strlen($password) < 8){
        return False;
    }
    else{
        return True;
    }
}

function good_password(){
    print('<p>Nice Password!</p>');
}

function bad_password(){
    print('<p>Bad password :(</p> <p><a href="webform.php">Go back to Web Form</a></p>');
}

function check_colors(){
    $liked_colors = $_POST["color-choice"];

    $loved_color = htmlentities($_POST["color-favorite"]);
    if(!in_array($_POST["color-favorite"], $liked_colors)){
        echo "what do you mean you love " . $loved_color . "? You don't even like it!";
    } else{
        echo "Thank you for following directions! " . $loved_color . " is a cool color!";
    }
}

function main(){
    $user_password = $_POST["password-input"];
    if(password_checker($user_password)){
       good_password();
    }
    else{
        bad_password();
    }
    check_colors();
}

main();

/*
function validator(){
    error count = 0
    calls a function that checks q1 (if comes back as error, update error count) (these functions would show issues to the user in a user friendly way)
    call a function that checks q2
    ...
    if(error count > 0){
        display link back to webpage
    }
}
*/


?>

</main>
    </body>
    </html>