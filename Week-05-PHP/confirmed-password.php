<?php

$password_hash = "\$2y\$10\$Oz4SIlSl4wbHiGZ.4inwQeQS98MkxIHa.KZUN4iqBCWChMk.CVXXK";
$verified = password_verify($_POST["password-input"], $password_hash);

function main(){
    if($verified){
        # do stuff with user data (validation & sanitization first)
    }
    else{
        # error page (if wanted)
    }
}




?>