<?php

define("TITLE","IF..ELSE...IF");

$native_language = "German";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo TITLE; ?></title>
</head>
<body>

    <h2>Your Example</h2>
    <p></p>
    <?php
    if($native_language == "French"){
        echo "Freanch=>Lorem ipsum dolor sit amet, consectetur adipisicing elit.";
    }else if($native_language == "Spanish"){
        echo "Spanish=>Lorem ipsum dolor sit amet, consectetur adipisicing elit.";
    }else{

        echo "Hello!Probably You speak english.";
    }

    ?>





















</body>
</html>
