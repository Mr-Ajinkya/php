<?php

define("TITLE","Associative Array");

$handlebar = array(
                    'name'            => 'Handlebar',
                    'creep_factor'    => 'High',
                    'avg_growth_days' =>14
                  );

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP <?php echo TITLE; ?></title>
</head>
<body>

    <h2>The <?php echo $handlebar['name']; ?> Moustache.</h2>
    <p>This is moustache is quite dirt squirrel! It boasts a creep factor of <strong><?php echo $handlebar['creep_factor']; ?></strong></p> and takes <strong><?php echo $handlebar['avg_growth_days']; ?> days</strong> to grow on average.


</body>
</html>
