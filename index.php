<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Loop Challenge</title>
</head>
<body>
    
    <?php
    // Challenge 1

    $break = "<br>";
    $b = 10;

    for ($a=0; $a < $b ; $a++) { 
        echo $a.' bean'.$break;
    }
    echo "<hr>";
    // Challenge 2
    
    $name = array('Taariq', 'Evan', 'Josh', 'Natheer', 'Marlon');
    $hairColour = array('Black', 'Brown', 'Blonde', 'Grey', 'Orange');
    $age = array( 21, 20, 23, 27, 30);
    $height = array( 160, 155, 130, 120, 170);
    $student = array();
    $example = array();

    for ($i=0; $i <= 4; $i++) { 
         $student[$i] = array($name[$i],$hairColour[$i],$age[$i],$height[$i]);
    }
    
    for ($b=0; $b <=4; $b++) {

        echo $student[$b][0].' ';
        echo $student[$b][1].' ';
        echo $student[$b][2].' years old ';
        echo $student[$b][3].' cm '.$break;
        echo "<hr>";
    }

    ?>
</body>
</html>