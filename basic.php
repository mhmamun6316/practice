<?php

echo "hellow world";

echo "<br>";

// variables
$x = 5;

echo $x;

$x ="okk";

echo "<br>";

echo $x;
echo "<br>";

// operators

$a = 5; $b=6;

// arithmatic -,+,/,*
$c = $a + $b;
echo $c;
echo "<br>";

// assignment =,-=,+=,*=,/= 
$c = $a;
echo $c;
echo "<br>";

$c += $a;
echo $c;
echo "<br>";

// comparison operators ==,===,!=,>=

$x = 100;  
$y = "100";

var_dump($x == $y);

$x = 100;  
$y = "100";

var_dump($x === $y);

// increment/decrement operators ++,--

$aa = 5;

echo ++$a." ".--$a;
echo "<br>";
?>