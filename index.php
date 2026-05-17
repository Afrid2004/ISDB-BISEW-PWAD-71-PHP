<?php 

    echo "===================PRINT OPERATION===================" . "<br>";
    echo 'Hello world <br>';
    echo 'This is ', 'Multiple ', 'string ', '</br>';

    //printf with placeholder (direct print)
    $myName = "Afrid";
    printf("Printf String: Hello, %s</br>", $myName);
    $myGpa = 4.89;
    printf("Printf Float: My GPA: %.2f</br>", $myGpa);

    //sprintf with placeholder (doesn't print directly, only return)
    $mySprintName= "Rayhan";
    $rayhanGPA = 4.25;
    echo sprintf("Sprintf String & Float: Hello, %s. Tumi GPA %.2f peyecho out of 5.00", $mySprintName, $rayhanGPA) . '</br>';

    // string variable declare
    $firstName = 'Faisal';
    $lastName = 'Yousuf';

    //print variables like string litarel
    echo "Echo: $firstName $lastName";
    echo "</br>";

    echo "===================ARITHMETIC OPERATION===================" . "<br>";
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

    echo "===================VARIABLE & DATA TYPES===================" . "<br>";
    //constant variables
    const PI = 3.1416;
    //print constant variables with string
    echo "Value of PI is " . PI . "</br>";

    //for type show use var dump
    $float = 4.50;
    echo "Data Types: ";
    var_dump($float) ;
    echo "</br>";

    echo "===================ARRAY & ASSOSIATIVE ARRAY===================" . "<br>";
    //array
    $students = ["Faisal", "Rayhan", "Afrid"];
    //print array with print_r
    echo "Normal Array: ";
    print_r($students);
    echo "</br>";
    echo "As a String in pre tag: <pre>".print_r($students,true)."</pre>";

    //assosiative array key pare value like JS Object
    $Assosiative = ["name" => "Faisal Yousuf Afrid", "age" => 22, "address" => "Gulshan, Dhaka"];
    //print full assosiative array with print_r
    echo "Assosiative Array: ";
    print_r($Assosiative);
    echo "</br>";
    //print assosiative array specific data with echo
    echo "Assosiative array specific data: {$Assosiative["address"]}" . "<br>";

    echo "===================STRING OPERATIONS===================" . "<br>";
    $string = "This is a String ";
    echo "String: ". $string . "<br>";
    echo "String Length: ". strlen($string) . "<br>";
    echo "String WordCount: ". str_word_count($string) . "<br>";
    echo "String UpperCase: ". strtoupper($string) . "<br>";
    echo "String LowerCase: ". strtolower($string) . "<br>";
    echo "String Trim: ". trim($string) . "<br>";
    echo "String Replace: ". str_replace("String", "Replaced String", $string) . "<br>";

    echo "===================STRING FUNCTIONS===================" . "<br>";
    $functionText = "i love PHP";
    echo "String: ". $functionText . '<br>';
    echo "String Length: ". strlen($functionText) . '<br>';
    echo "String Reverse: ". strrev($functionText) . '<br>';

    
    echo "String Position of PHP: ". strpos($functionText, "PHP") . '<br>';
    echo "String First Word Capital: ". ucfirst($functionText) . '<br>';
    echo "String Split: "; print_r(str_split($functionText));
    echo '<br>';

    echo "===================TYPE CASTING===================" . "<br>";
    $value = "100.50";
    echo "String Value: ".$value."<br>";
    echo "String To Integer Value: ". (int) $value ."<br>";
    echo "String To Float Value: ". (float) $value ."<br>";
?>

