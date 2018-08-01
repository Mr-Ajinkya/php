<?php

define("TITLE","If...else");

$fav_fruit = "pipneapple";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP <?php echo TITLE; ?></title>
</head>
<body>

    <h2>If....Else statement</h2>
    <?php

    if($fav_fruit == "pipneapple"){
        echo "YAY! Pineapple is the best.";
    }else{
        echo "so, you like orange.";
    }

    ?>

</body>
</html>
