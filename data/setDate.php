<?php
    $data = new DateTime('22-01-2020');
    $data->setDate(2020,05,30);
    echo $data->format('d-m-Y H:i:s');

?>