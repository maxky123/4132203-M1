<?php

echo "Hello Wordl!";

$name = "Join Doe"
$age = 25;

$arr = array(1, 2, 3, "win", 5);
$assoc_arr = ["name" => "Join Doe", "age" => 25];

echo $arr;
echo "<br>";
var_dump($arr);
echo "<br>";
echo "Hello $name";
echo 'Hello $name';

$object = (object)$assoc_arr;
echo $object->name;
echo $assoc_arr["name"]

echo json_decode($object)

$car = [
    "brand" => "Toyota",
    "model" => "Corrola",
    "year"  => $plus_fn
];

function sayHello($name){
    echo "Hello $name";
}

$plus_fn = function($a, $b){
    return $a + $b;
}

?>

<?php
//database
phpinfo()


?>