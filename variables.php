<?php

/******** DATATYPES IN PHP  ********/
// String
// Integer
// Float
// Boolean
// Array
// Objects
// NULL
// Resource
?>

<?php
/******** Variable Rules *******/ 
// Variables must start with $
// Variables are case sensitive
// Variables must start with _ or letter and they can be alphanumeric

// define('NAME', 'value') :: Used to define a constant

$name = "Ankit";
$age = 21;
$has_kids = false;
$cash_on_hand = 200.75;

echo $name;
echo $age;
echo $has_kids;
echo  $cash_on_hand;

echo "$name is $age years old and has kids" ;
echo  var_export($has_kids);

define('HOST', 'localhost');
define('DB_NAME', 'local_db');

echo HOST . DB_NAME
?>