<?php
     date_default_timezone_set('America/Porto_Velho');
    $atual = new DateTime();
    $especifica = new DateTime('2020-04-22');
    $texto = new DateTime('+1 month');
    print_r($atual);
    echo "<br>";
    print_r($especifica);
    echo "<br>";
    print_r($texto);

?>