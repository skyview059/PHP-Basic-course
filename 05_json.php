<?php

$array  = array( 'Text' => 'Hi i am Text', '2nd' => 20, 'key' => 10.5);
$json   = json_encode($array);
$encode = base64_encode($json);




var_dump($array);
var_dump($json);
var_dump($encode);

echo '<hr/>';


$encode = base64_decode('eyJUZXh0IjoiSGkgaSBhbSBUZXh0IiwiMm5kIjoyMCwia2V5IjoxMC41fQ==');
$json   = json_decode($encode);
$array  = $json;


var_dump($encode);
var_dump($json);