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

    function power($num,$power){

        if($num>0 and $power>0){

            $starting = 1;
            $power1 = $power;
            while($power1>0){
                $starting = $starting*$num;
                $power1--;
            }
    
            echo $num , ' Raised to power ', $power, ' is ', $starting,'<br>';
        }
        else{
            echo 'Either base is negative or the power is negative , Please Enter a positive integer <br>';
        }
    }

    power(3,7);
    power(-3,7);
    power(-3,-7);
    power(3,-7);
    power(6,6);

?>
</body>
</html>