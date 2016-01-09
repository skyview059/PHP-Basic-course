<?php 

/*
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
*/

$variable = 'Text';

$variable = 10;

$variable = 10.5;

$array = array( 'Text', 10, 10.5);


$array = array( 'Text' => 'Hi i am Text', '2nd' => 20, 'key' => 10.5);
$object = (object) array( 'Text' => 'Hi i am Text', '2nd' => 20, 'key' => 10.5);


//echo $array['Text'];
//echo '<br/>';
//
//echo $object->Text;

$Boolean = true;
$Boolean = false;

$NULL = NULL;

var_dump($NULL);