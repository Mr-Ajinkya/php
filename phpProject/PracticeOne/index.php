<?php

define ("TITLE","Variables and Constants");

$my_name = "Ajinkya";
$fav_color = "Blue";
$birth_year = 1991;

date_default_timezone_set('Asia/Kolkata');

$today = date('F j, Y');
$this_year = date('Y');

$my_age = ($this_year - $birth_year);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get your hands dirty: <?php echo TITLE; ?></title>
</head>
<body>
    <h3>Today's Date:</h3>
    <p><?php echo $today; ?></p>

    <h3>My Name:</h3>
    <p><?php echo $my_name; ?></p>

    <h3>My favourite Color:</h3>
    <p><?php echo $fav_color; ?></p>

    <h3>My age:</h3>
    <p><?php echo $my_age; ?></p>

    <footer>
        <h5>&copy; 2018 <?php echo $my_name; ?></h5>
    </footer>

</body>
</html>
