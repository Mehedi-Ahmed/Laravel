<?php

$strings = ["Hello", "World", "PHP", "Programming"];

$vowels = ['A','E','I','O','U','a', 'e', 'i', 'o', 'u'];

foreach ($strings as $main) {
    $vowelCount = 0;
    $reversed = '';
    $length = strlen($main);

    for ($i = 0; $i < $length; $i++) {
        $char = $main[$i];
        if (in_array($char, $vowels)) {
            $vowelCount++;
        }
    }

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $main[$i];
    }

    echo "Original String: $main, Vowel Count: $vowelCount, Reversed String: $reversed\n";
}

?>

