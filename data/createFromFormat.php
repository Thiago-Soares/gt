<?php
    $data = '02-12-1988';
    $data1 = DateTime::createFromFormat('d-m-Y', $data);
    echo $data1->format('d-m-Y');
?>