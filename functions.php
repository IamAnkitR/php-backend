<?php

function registerUser($email){
    echo 'User Registered with email ' . $email;
}

// registerUser("ankit@gmail.com");

function returnSum($num1, $num2){
    return $num1 + $num2;
}

$ans = returnSum(2,3);

echo $ans;
?>