<?php

define("TITLE","Multidimensional Array");

$moustache = array(
                    array(
                            'name' => 'Handlebar',
                            'creep_factor' => 'High',
                            'avg_growth_days' => 14
                           ),

                    array(
                            'name' => 'Salvador Dali',
                            'creep_factor' => 'Extreme',
                            'avg_growth_days' => 62
                           ),

                    array(
                            'name' => 'Fu Manchu',
                            'creep_factor' => 'Very High',
                            'avg_growth_days' => 14
                           ),
                  );

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP <?php echo TITLE; ?></title>
</head>
<body>

    <h2>The <?php echo $moustache[0]['name']; ?> Moustache.</h2>
    <p>This is moustache is quite dirt squirrel! It boasts a creep factor of <strong><?php echo $moustache[0]['creep_factor']; ?></strong></p> and takes <strong><?php echo $moustache[0]['avg_growth_days']; ?> days</strong> to grow on average.

    <h2>The <?php echo $moustache[1]['name']; ?> Moustache.</h2>
    <p>This is moustache is quite dirt squirrel! It boasts a creep factor of <strong><?php echo $moustache[1]['creep_factor']; ?></strong></p> and takes <strong><?php echo $moustache[1]['avg_growth_days']; ?> days</strong> to grow on average.


    <h2>The <?php echo $moustache[2]['name']; ?> Moustache.</h2>
    <p>This is moustache is quite dirt squirrel! It boasts a creep factor of <strong><?php echo $moustache[2]['creep_factor']; ?></strong></p> and takes <strong><?php echo $moustache[2]['avg_growth_days']; ?> days</strong> to grow on average.


</body>
</html>
