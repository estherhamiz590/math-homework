<?php
// Define variables and initialize array
$var1 = "value1";
$var2 = "value2";

// Initialize arrays
$array1 = array("element1", "element2");
$array2 = array(10, 20);

// Access elements in an array
echo $array1[0]; // Output: value1

// Use variables within an if statement
if ($var1 == "valueA") {
    echo "Variable is 'valueA'.";
}

// Loop through arrays and print values
foreach ($array1 as $key => $value) {
    echo $value . " - " . $array2[$key] . "<br>";
}
?>
