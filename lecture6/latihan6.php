<?php
    namespace Enemy;

    trait Makhluk{
        function printTrait(){
            echo "Nama trait adalah: " . __TRAIT__;
        }
    }

    class ManusiaSerigala{
        use Makhluk;
    }
    $objTest = new ManusiaSerigala();
    $objTest->printTrait();
?>