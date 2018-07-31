<?php

define("TITLE","Arrays");

$my_name = "Ajinkya Virkud";

$moustache = array("Handlebar","Salvador Dali","Fu Manchu");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo TITLE; ?></title>
    <link rel="stylesheet" href="../phpArray/css/style.css">
</head>
<body>

    <h2>Type Of Mustache</h2>
    <ul>
        <li><?php echo $moustache[0]; ?></li>
        <li><?php echo $moustache[1]; ?></li>
        <li><?php echo $moustache[2]; ?></li>
    </ul>

    <footer class="footer">
        <h4>&copy; <?php echo date('Y'); ?> <?php echo $my_name; ?></h4>
    </footer>

</body>
</html>
