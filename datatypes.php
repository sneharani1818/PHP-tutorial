<?php

$name="Sneha";
$income=120000;

/*
PHP data types
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
*/

//String - sequence of charcaters
$name="Sneha";
$friend='God';

//Integer - non decimal number
$income=120000;
$debts=0;

//Float - decimal numbers
$income=120000.0;
$debt=0.0;

//Boolean
$x=true;
$is_friend=false;

echo var_dump($x);// this fn will return datatype and its value

//Object - Instances of Class

//Array -  used to store multiple values in a single variable
$friends=array("Rohan","John","Alexa");
echo "<br>";
echo var_dump($friends);
echo $friends[2];

//NULL
$name=NULL;//means no value

?>