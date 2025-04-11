<?php
function sum($numbers) {
    foreach ($numbers as $num) {
        if (!is_numeric($num)) {
            throw new Exception("All arguments must be numeric.");
        }
    }

    return array_sum($numbers);
}

function multiply($multiplicand, $multiplier) {
    if (empty($multplier)) {
        throw new Exception("Multiplier cannot be empty.");
    }

    if (!is_numeric($multiplier)) {
        throw new Exception("Multiplier must be numeric.");
    }

    return $multiplicand * $multiplier;
}
