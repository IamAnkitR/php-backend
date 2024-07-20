<?php

$numbers = [1,2,3,4,5,6];
$fruits = array('apple', 'pineapple', 'orange');

for($i=0; $i<count($fruits); $i++){
    // echo $fruits[$i] . "<br/>";
}

$j = 0;

while($j < count($fruits)){
    // echo $fruits[$j] . "<br/>";
    $j++;
}

$k = 0;

do{
//   echo $fruits[$k] . "<br/>";
  $k++;
}while($k < count($fruits))

// var_export($numbers);
// var_export($fruits);
?>

<?php

/* Array Functions*/

$fruits = ["Apple", "Banana", "Guava", "Peach"];

// echo count($fruits);
// echo in_array("Apple", $fruits);
array_push($fruits, "Blueberry");
array_unshift($fruits, "Strawberry");
array_pop($fruits);
unset($fruits[3]);

// print_r($fruits)


$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];
// print_r($arr4);



$numbers = range(1,20);

// print_r($numbers);

$mapped = array_map(function($num){
  return  $num*2;
}, $numbers);

$filtered = array_filter($numbers, fn($num) =>
$num <10);

$reduced = array_reduce($numbers, fn($carry, $num) =>
$carry +=$num);

// print_r($mapped);
// print_r($filtered);
var_dump($reduced);
?>