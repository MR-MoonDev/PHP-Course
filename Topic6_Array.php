<?php
$names = array("Muneeb", "Ali", "Ahmed");

// Accessing elements
echo $names[0] . '<br>';
echo $names[1] . '<br>';

$array_holder = array(
    "name" => "Muneeb",
    "Age" => 12,
    "city" => "TandoAllahyar"
);
    echo $array_holder["name"]. '<br>';
    echo $array_holder["Age"]. '<br>';

    $students = array(
    array("Muneeb", 20, "A"),
    array("Ali", 21, "B"),
    array("Ahmed", 22, "C")
);

// Accessing values
echo $students[0][0]. '<br>'; 
echo $students[2][2]. '<br>'; 

$arr = array("apple", "banana", "mango");

// count — number of elements
echo count($arr); // 3

// in_array — check if value exists
echo in_array("banana", $arr) ? "Yes" : "No"; // Yes

// array_push — add at end
array_push($arr, "orange");

// array_pop — remove last
array_pop($arr);

// array_shift — remove first
array_shift($arr);

// array_unshift — add at beginning
array_unshift($arr, "grape");

// print_r — print readable array
print_r($arr);
?>

