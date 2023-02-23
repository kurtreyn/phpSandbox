<?php
// ============================================
// ====== MULTIDIMENSIONAL ARRAYS =============
// ============================================
$articles = [
  ["title" => "First post", "content" => "this is the first post"],
  ["title" => "Another post", "content" => "another post to read here"],
  ["title" => "Read this", "content" => "you must read this article"]
  ];
  
  $count = 3;
  $price = 99.99;
  
  $values_one = [$count, $price];
  
  $values_two = [
    "message" => "Hello world",
    "count" => 150,
    "pi" => 3.14,
    "status" => false,
    "result" => null
    ];
    
    // var_dump($values_one);
    // var_dump($values_two);
    // var_dump($articles);
    // var_dump($articles[1]["title"]);




// ============================================
// =========== FOR EACH LOOP ==================
// ============================================

$articles_two = ["first post", "another post", "read this"];

// foreach($articles_two as $article){
//   echo $article. ", ";
// }

// foreach($articles_two as $index => $article){
//   echo $index . " - " . $article . ", ";
// }

$articles_three = [
  "a" => "First post",
  "b" => "Another post",
  "c" => "Read this"
];

// foreach($articles_three as $index => $article){
//   echo $index . " - " . $article . ", ";
// }

// ============================================
// =========== IF CONSTRUCT ==================
// ============================================

$articles_arr = ["one"];

// var_dump(empty($articles_arr));

// if(empty($articles_arr)){
//   echo "The array is empty";
// } else {
//   echo "The array is not empty";
// }


// ============================================
// ======== COMPARISON OPERATORS ==============
// ============================================

$age = 21;

// if($age != 21){
//     echo "condition is true";
// } else {
//     echo "condition is false";
// }


// ============================================
// ============= WHILE LOOP ===================
// ============================================

$month = 1;

// while($month <= 12){
//     echo $month . ", ";
//     $month +=  1;
// }

// ============================================
// =============== FOR LOOP ===================
// ============================================

// for($i = 1; $i <= 10; $i++){
//     echo $i . ", ";
// }


// ============================================
// =============== ELSEIF =====================
// ============================================

$hour = 21;

// if($hour < 12){
//     echo "Good morning";
// } elseif($hour < 18){
//     echo "Good afternoon";
// } elseif($hour < 22){
//     echo "Good evening";
// } else{
//     echo "Good night";
// }


// ============================================
// =============== SWITCH =====================
// ============================================

$day = "*";

switch($day){
    case "Mon":
        echo "Monday";
        break;
    case "Tue":
        echo "Tuesday";
        break;
    case "Wed":
        echo "Wednesday";
        break;
    default:
        echo "Haven't heard of that day";
        break;

}
    
?>