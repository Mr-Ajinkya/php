<?php

define("TITLE","PHP Practice Three");

$Species = "Human";
$nativeLanguage = "English";
$yearsOnEarth = 25;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP <?php echo TITLE; ?></title>
</head>
<body>


    <h2>Example</h2>
    <?php
    if($Species == "Black Rhino"){
        echo "Black Rhino!";
    }else if($Species == "Human"){
        echo "Humans! Please leave the blak rhino alone.";
    }else{
        echo "Welcom! Your kind is unknow to us!";
    }

    ?>

    <h5>Another example</h5>
    <?php
    if($yearsOnEarth){
        echo "Congraatulations for being on earth for 25 years";
    }else if($yearsOnEarth < 20){
        echo "Not quite 20 yet, young grasshooper.";
    }else{
        echo "You must be more than 20 years old.";
    }
    ?>

</body>
</html>
