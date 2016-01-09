<?php

$array = array( 'India', 'Pakistan', 'Bangladesh');

//asort($array);
//var_dump($array);

foreach($array as $key => $value){
    echo $key .' '. $value .'<br/>';
}
//
//require ('sidebar.php');
//include ('sidebar.php');
//include ('sidebar.php');

include_once ('sidebar.php');
require_once ('sidebar.php');

/*
Introduction
if
else
elseif/else if

Alternative syntax for control structures
    while
    do-while

for
foreach

break
continue
switch
declare
return

require
include
require_once
include_once
goto
 */




//$today = 'Sun'; ///date('D');
//
//
//if($today == 'Sat'){
//    echo 'Today is our Learning Day';
//} elseif( $today == 'Sun') {
//    echo 'Today is Holiday';
//} else {
//    echo 'Today is ' . $today;
//}


//for($i=1;$i <= 20; $i++){
//    echo $i . "<br/>";
//}