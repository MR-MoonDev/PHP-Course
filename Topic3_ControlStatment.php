<?php
$age = 18;

if ($age >= 18) {
    echo "Adult";
} elseif ($age >= 13) {
    echo "Teenager";
} else {
    echo "Child";
}

$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Start of the week";
        break;
    case "Friday":
        echo "Weekend is near";
        break;
    default:
        echo "Just another day";
}

$i = 1;
while ($i <= 5) {
    echo "Number: $i<br>";
    
    $i++;
}

$i = 1;
do {
    echo "Number: $i<br>";
    $i++;
} while ($i <= 5);

for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i<br>";
}

$colors = ["Red", "Green", "Blue"];

foreach ($colors as $color) {
    echo "$color<br>";
}

for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) continue;
    if ($i == 5) break;
    echo "$i<br>";
}

?>