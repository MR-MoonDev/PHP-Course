<?php
echo abs(-15) . '<br>'; // Output: 15

echo ceil(4.3) . '<br>'; // Output: 5

echo floor(4.7) . '<br>'; // Output: 4

echo round(4.5) . '<br>'; // Output: 5
echo round(4.4) . '<br>'; // Output: 4
echo sqrt(25) . '<br>'; // Output: 5
echo pow(2, 3) . '<br>'; // Output: 8 (2^3)
echo pow(2, 3) . '<br>'; // Output: 8 (2^3)
echo rand() . '<br>';          // Random number
echo rand(1, 100) . '<br>';    // Random number between 1 and 100

// Better performance version
echo mt_rand(1, 100) . '<br>';
echo pi() . '<br>'; // Output: 3.1415926535898
echo fmod(20, 7) . '<br>'; // Output: 6
echo number_format(12345.6789, 2) . '<br>'; // Output: 12,345.68

?>