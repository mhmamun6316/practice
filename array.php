<?php
//An array stores multiple values in one single variable:
//An array is a special variable, which can hold more than one value at a time.
// indexed array
$cars = array("Maserati", "Porsche", "BMW");
echo count($cars);
echo "<br> I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ". <br>"; 

$cars = [323,323,33333];
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br> <br>";

// print array trough loop
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

echo "<br>";

// associative array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

echo "<br> <br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

// multidimentional array
// future
?>