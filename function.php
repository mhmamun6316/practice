<?php
/*
A function is a block of statements that can be used repeatedly in a program.
A function will not execute automatically when a page loads.
A function will be executed by a call to the function.
*/

function writeMsg() { //declare the function
    echo "Hello world!";
}

writeMsg(); // call the function

echo "<br>";

function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

// using return
function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
}

echo "<br>";
echo "<br>";

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>
