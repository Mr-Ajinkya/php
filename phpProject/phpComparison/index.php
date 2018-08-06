<?php


define("TITLE","Comparison operator");

$yearsOnEarth = 25.32;
$favouriteStringNum = "1";
$birthCountry = "Canada";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo TITLE; ?></title>
</head>
<body>


   <h3>Equal <code>==</code></h3>
   <?php
   if($yearsOnEarth){

   echo "Your age is $yearsOnEarth";

   }
   ?>

   <h3>Idntical <code>===</code></h3>
   <?php
        if($favouriteStringNum === 1){
            echo "Your favourite number is integer";
        }else if($favouriteStringNum === "1"){
            echo "Your favourite number is string called 1!";
        }else{
            echo "You must have differnt favourite number";

        }
    ?>
















</body>
</html>
