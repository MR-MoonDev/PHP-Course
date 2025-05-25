<?php
function my_fun(){
    echo "This function build by me <br>";
}

my_fun();

function my_fun1($name){
    echo "HEllO   $name";
}
my_fun1("Muneeb");

function add($a, $b) {
    return $a + $b;
}

echo add(5, 3);  // Outputs: 8

?>