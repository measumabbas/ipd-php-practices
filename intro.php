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

    class Person{
            public $firstName;
            public $lastName;
            public $status;

         function __construct($firstName,$lastName,$status){
                $this->firstName = $firstName;
                $this->lastName = $lastName;
                $this->status = $status;
            }

            public function sayHello(){
                echo "hello ",$this->firstName." ".$this->lastName;
            }
    }

    $person1 = new Person("Measum","Abbas","Single");

    $person1->sayHello();
?>
</body>
</html>
