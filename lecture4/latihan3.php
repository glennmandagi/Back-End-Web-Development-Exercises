<?php
    class Fruit{
        public $name;
        public $colour;

        function set_name(){
            $this->name = $name;
        }

        function get_name(){
            return $this->name;
        }
    }

    $apple = new Fruit();
    $banana = new Fruit();

    $apple->set_name('Apple');
    $banana->set_name('Banana');

    echo "Fruit #1 Name: ".$apple->get_name();
    echo "<br>";
    echo "Fruit #2 Name: ".$banana->get_name();
?>
