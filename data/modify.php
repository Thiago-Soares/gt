<?php
    $data = new DateTime('02-12-1988 02:00');
    $data->modify('+1 year');
    echo $data->format('d-m-Y H:i');
?>