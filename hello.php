<?php

$message = "Hello again";
$word_one = "Hi";
$word_two = "there";

$count = 10;
$size = 5;

// echo $message;
$articles = [
    "a" => "First post",
    "b" => "Another post",
    "c" => "Read this"
];

$arr = ["zero", "one", "two"];
$arr_two = [0 => "zero", 2 => "three"];

// Associative array:
$arr_assoc = [
    "key_one" => 1,
    "key_two" => 2
];

// forEach loop:
// foreach ($arr as $ar) {
//         echo $ar, ", ";
//     }

foreach($articles as $index => $article){
    echo $index . " - " . $article . ", ";
}

// var_dump($word_one . " " . $word_two);
// var_dump($arr_assoc);