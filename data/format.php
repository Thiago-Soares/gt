<?php
    $data = new DateTime();
    echo $data->format('d-m-Y H:i:s')."<br>";
    $data = new DateTime('+1 month');
    echo $data->format('d-m-Y H:i:s');
?>