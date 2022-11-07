<?php
    $t = 5;

    if ($t < 10) {
      echo "Have a good day!";
    }

    echo "<br>";

    if ($t < 2) {
         echo "Have a good day!";
    } else {
         echo "Have a good night!";
    }

    echo "<br>";

    if ($t < 2) {
        echo "Have a good morning!";
    } elseif ($t < 10) {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
?>