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

        function evenOdd($type,$first,$last){
            if(strtolower($type) == 'even'){
                if($first%2==0){
                    echo 'Even Number between ',$first,' and ',$last ,' are <br>';
                    for($i=$first;$i<=$last;$i+=2){
                        echo $i,'<br>';
                    }
                }else{
                    echo 'Number you entered is not even <br>';
                }
            }else if(strtolower($type) == 'odd'){
                echo 'Odd Number between ',$first,' and ',$last ,' are <br>';
                if($first%2!=0){
                    for($i=$first;$i<=$last;$i+=2){
                        echo $i,'<br>';
                    }
                }else{
                    echo 'Number you entered is not odd <br>';
                }
            }else{
                echo 'Please Enter a valid type Even or Odd <br>';
            }
        }
        
        evenOdd('even',2,10);
        evenOdd('odd',1,9);
        evenOdd('EvEn',2,8);
        evenOdd('oDd',1,5);
        evenOdd('Dd',1,5);
        evenOdd('even',1,5);
        evenOdd('odd',2,5);
    ?>
</body>
</html>