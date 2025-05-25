<?php
$String = "My name is Muneeb";

// 1. strlen — Get string length
echo "Length: " . strlen($String) . "<br>"; // Output: 18

// 2. str_word_count — Count words in string
echo "Word count: " . str_word_count($String) . "<br>"; // Output: 4

// 3. strtoupper — Convert to uppercase
echo "Uppercase: " . strtoupper($String) . "<br>"; // Output: MY NAME IS MUNEEB

// 4. strtolower — Convert to lowercase
echo "Lowercase: " . strtolower($String) . "<br>"; // Output: my name is muneeb

// 5. ucfirst — Uppercase first character
echo "ucfirst: " . ucfirst($String) . "<br>"; // Output: My name is Muneeb

// 6. ucwords — Uppercase first letter of each word
echo "ucwords: " . ucwords($String) . "<br>"; // Output: My Name Is Muneeb

// 7. strrev — Reverse string
echo "Reversed: " . strrev($String) . "<br>"; // Output: beenuM si eman yM

// 8. strpos — Find position of substring
echo "Position of 'Muneeb': " . strpos($String, "Muneeb") . "<br>"; // Output: 11

// 9. str_replace — Replace part of a string
echo "Replace 'Muneeb' with 'Ali': " . str_replace("Muneeb", "Ali", $String) . "<br>"; // Output: My name is Ali

// 10. substr — Extract substring
echo "Substring (start at 11): " . substr($String, 11) . "<br>"; // Output: Muneeb

?>
