<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function leapYearFinder($year){
    
        if($year%400 == 0){
            echo $year.' is a leap year';
        }else if($year%100==0){
            echo $year.' is not a leap year';
        }else if($year%4==0){
            echo $year.' is a leap year';
        }else{
            echo $year.' is not a leap year';
        }
    }

    leapYearFinder(2020);
    
    ?>
</body>
</html>