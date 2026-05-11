<?php 
    echo 'Hello world <br>';

    // string variable declare
    $firstName = 'Faisal';
    $lastName = 'Yousuf';

    //print variables like string litarel
    echo "$firstName $lastName";
    echo "</br>";

    //number variable declare & arithmetic operations
    $num1 = 10;
    $num2 = 5;
    $sum = $num1 + $num2;
    $sub = $num1 - $num2;
    $mul = $num1 * $num2;
    $div = $num1 / $num2;
    $mod = $num1 % $num2;

    //2 numbers are
    echo "Num1 = $num1, Num2 = $num2 </br>";

    //sum of 2 number
    echo "Sum is $sum </br>";

    //sub of 2 number
    echo "Sub is $sub </br>";

    //multiplication of 2 number
    echo "Multiplication is $mul </br>";

    //divition of 2 number
    echo "Divition is $div </br>";

    //Modulas of 2 number
    echo "Modulas is $mod </br>";


    //constant variables
    const PI = 3.1416;
    //print constant variables with string
    echo "Value of PI is " . PI . "</br>";

    //array
    $students = ["Faisal", "Rayhan", "Afrid"];
    //print array with print_r
    echo "Normal Array: ";
    print_r($students);
    echo "</br>";

    //assosiative array key pare value like JS Object
    $Faisal = ["name" => "Faisal Yousuf Afrid", "age" => 22, "address" => "Gulshan, Dhaka"];
    //print full assosiative array with print_r
    echo "Assosiative Array: ";
    print_r($Faisal);
    echo "</br>";
    //print assosiative array specific data with print_r
    echo "Assosiative array specific data: {$Faisal["address"]}";

?>

