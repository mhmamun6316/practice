<?php

/* for loop
it is used when we know how many times to run the loop */
for ($x = 0; $x <= 5; $x++) {
    echo "The number is: $x <br>";
}

echo "<br>";
// foreach loop ...only works on array
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}

echo "<br>";
/* While loop
The while loop executes a block of code as long as the specified condition is true. */
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

echo "<br>";
// The break statement can also be used to jump out of a loop when a condition is made.
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
}

echo "<br>";
/* The continue statement breaks one iteration (in the loop),
 if a specified condition occurs, and continues with the next iteration in the loop. */
 for ($x = 0; $x < 5; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }


?>