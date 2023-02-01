<?php
    class Phone_Number{
        var $no_hp;
        var $email;
    }

    $andi = new Phone_Number();
    $rudi = new Phone_Number();

    $andi->no_hp="0812345";
    $andi->email="andi@unklab.com";

    $andi->no_hp="0854321";
    $andi->email="rudi@unklab.com";

    echo "Andi Phone Number & E-mail:"."<br>";
    echo $andi->no_hp;
    echo "<br />";
    echo $andi->email;
    echo "<br />";

    echo "<br><br>Rudi Phone Number & E-mail:"."<br>";
    echo $rudi->no_hp;
    echo "<br />";
    echo $rudi->email;
    echo "<br />";

?>