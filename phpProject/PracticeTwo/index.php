<?php

define("TITLE","Arrays Practice");

$age_group = array("child","teeager","adult");

$handlebar = array(
                    'name'=>'Handlebar',
                    'color'=>'black'
);

$fu_manchu = array(
                  'name' =>'Fu manchu',
                'color' => 'brown'
                  );

$salvador_dali = array(
                  'name' =>'Salvador Dali',
                'color' => 'blonde'
                  );

$gentlemen = array(
                        array(
                                'first_name' => 'Carter',
                                'country' => 'Canada'
                             ),

                         array(
                                'first_name' => 'Rodrigo',
                                'country' => 'China'
                             ),

                         array(
                                'first_name' => 'Giovanni',
                                'country' => 'Itly'
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

    <h3><?php echo $gentlemen[0]['first_name'] ?> from <?php echo $gentlemen[0]['country'] ?></h3>
    <p><?php echo $gentlemen[0]['first_name'] ?> is quite the <?php echo $age_group[2] ?>! He sport a solid <?php echo $handlebar['name']; ?> moustache. that is <?php echo $handlebar['color']; ?> in color.</p>

    <h3><?php echo $gentlemen[1]['first_name'] ?> from <?php echo $gentlemen[1]['country'] ?></h3>
    <p><?php echo $gentlemen[1]['first_name'] ?> is quite the <?php echo $age_group[0] ?>! He sport a solid <?php echo $fu_manchu['name']; ?> moustache. that is <?php echo $fu_manchu['color']; ?> in color.</p>

    <h3><?php echo $gentlemen[2]['first_name'] ?> from <?php echo $gentlemen[2]['country'] ?></h3>
    <p><?php echo $gentlemen[2]['first_name'] ?> is quite the <?php echo $age_group[1] ?>! He sport a solid <?php echo $salvador_dali['name']; ?> moustache. that is <?php echo $salvador_dali['color']; ?> in color.</p>

</body>
</html>






