<?php 
    class Fruit{

        public $fruitName;
        public $fruitColor;

        function __construct($fruitName,$fruitColor){
            $this->fruitName = $fruitName;
            $this->fruitColor = $fruitColor;
        }

        function getName(){
            return 'Name of the fruit is '. $this->fruitName;
        }
        function getColor(){
            return 'Color of the fruit is '. $this->fruitColor;
        }
    }


    $apple = new Fruit('apple','red');
    echo $apple->getName().'<br>';
    echo $apple->getColor();
    

?>