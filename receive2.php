<?php

$requestPayload = file_get_contents("php://input");
$object = json_decode($requestPayload);
var_dump($requestPayload);
$fs = fopen("myData2.txt", "w");
fwrite($fs, $requestPayload);
fclose($fs);

  ?>
