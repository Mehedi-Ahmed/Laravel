<?php

echo "Which operation do you want to perform? \n";
echo "1. Celsius to Fahrenheit \n";
echo "2. Fahrenheit to Celsius \n";
echo "Enter your choice : ";
echo "\n";

$choice = fgets(STDIN);
if ($choice == 1) {
    echo "Enter temperature in Celsius: ";
    $celsius = fgets(STDIN);
    $fahrenheit = ($celsius * 9/5) + 32;
    echo "$celsius Celsius is equal to $fahrenheit Fahrenheit.\n";
} elseif ($choice == 2) {
    echo "Enter temperature in Fahrenheit: ";
    $fahrenheit = fgets(STDIN);
    $celsius = ($fahrenheit - 32) * 5/9;
    echo "$fahrenheit Fahrenheit is equal to $celsius Celsius.\n";
} else {
    echo "Invalid input.";
}

?>