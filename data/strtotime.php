<?php
    echo 'Nrxt Month: '.date('d-m-Y',strtotime('+1 month')) . "<br>";
    $nextMonth = time() + (30 * 24 * 60 * 60);
    echo 'Next Month: '. date('d-m-Y', $nextMonth). "<br>";
?>