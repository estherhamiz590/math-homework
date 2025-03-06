<?php
  $numbers = array(1, 2, 3, 4, 5);
  $random_number = $numbers[array_rand($numbers)];
  echo "The random number is: $random_number";
?>