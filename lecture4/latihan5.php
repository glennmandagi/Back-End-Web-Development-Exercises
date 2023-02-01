<?php
    class Fruit{
        public $name;
        public $colour;

        public function __construct($name, $colour){
            $this->name = $name;
            $this->colour = $colour;
        }

        public function intro(){
            echo "The fruit is ($this->name} and the colour is {$this->colour}.";   
        }
    }

    class Strawberry extends Fruit{
        public function message(){
            echo "Do you like fruit?";
        }
    }

    $strawberry = new Strawberry("Strawberry", "re");
    $strawberry->message();
    echo "<br>";
    $strawberry->intro();