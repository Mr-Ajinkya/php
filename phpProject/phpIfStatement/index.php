<?php

//Constants
define("TITLE","If Statement");

$a = 20;
$b = 50;



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP <?php echo TITLE; ?></title>
</head>
<body>

    <h2>Your example</h2>

    <?php

        if($a < $b){

            echo "Yep! $a is certainly less than $b";

        }

    ?>

</body>
</html>
