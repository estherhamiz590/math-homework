<?php
$number1 = rand(0, 10);
$number2 = rand(0, 10);
$operation = rand(0, 1);
if ($operation == 0) {
    $result = $number1 + $number2;
} else {
    $result = $number1 - $number2;
}
echo "What is $number1 $operation $number2?";
echo "<br>";
echo "$result";
?>