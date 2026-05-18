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
    echo "String Case Ignore Replace: ". str_ireplace("string", "Replaced Case Ignored String", $string) . "<br>";

    echo "===================STRING FUNCTIONS===================" . "<br>";
    $functionText = "i love PHP";
    $fruits = ["Apple", "Banana", "Orange", "Mango"];
    $number = 12345.678;
    echo "String: ". $functionText . '<br>';
    echo "String Length: ". strlen($functionText) . '<br>';
    echo "String Reverse: ". strrev($functionText) . '<br>';
    echo "String Position of PHP: ". strpos($functionText, "PHP") . '<br>';
    echo "Charecter Position of H in PHP: ". strrpos("PHP", "H") . '<br>';
    echo "All Word First Charecter Capital: ". ucwords($functionText) . '<br>';
    echo "String First Word Capital: ". ucfirst($functionText) . '<br>';
    echo "String Repeat PHP: ". str_repeat("PHP ", 3) . '<br>';
    echo "Sub String: ". substr($functionText, 0, 6) . '<br>';
    echo "Character to Array: "; print_r(str_split($functionText));
    echo '<br>';
    echo "String to Array: "; print_r(explode(" ", $functionText));
    echo '<br> Fruits Array: ';
    print_r($fruits);
    echo "<br> Array to String: "; print_r(implode(",", $fruits));
    echo "<br> Number: $number";
    echo "<br> Number Formating: ". number_format($number ,2 ) . "<br>";
    echo "HTML to TEXT: ". htmlspecialchars("<h1>This is a H1 Tag Text</h1>") . "<br>";
    echo "HTML Tag remove: ". strip_tags("<h1>This is a Text without tag. </h1>") . "<br>";
    echo "String Chunk Split (divide string): ". chunk_split($functionText, 1, "-") . "<br>";

    echo "===================TYPE CASTING===================" . "<br>";
    $value = "100.50";
    echo "String Value: ".$value."<br>";
    echo "String To Integer Value: ". (int) $value ."<br>";
    echo "String To Float Value: ". (float) $value ."<br>";

    echo "===================CONTROL STRUCTURE===================" . "<br>";
    $isLoggedIn = true;
    echo $isLoggedIn? "Is Logged In: true <br>":"Is Logged In: false <br>";
    echo "Ternery Operator: ";
    echo $isLoggedIn?"Welcome" . "<br>":"Login" . "<br>";
    echo "If-Else: ";
    if($isLoggedIn){
        echo "Welcome"."<br>";
    }else{
        echo "Login"."<br>";
    }
    $color = "Sea Green";
    echo "Color: $color <br>";
    echo "Switch Statement: ";
    switch ($color) {
        case 'Sea Green':
            echo "$color Is My Favourite Color. <br>";
            break;
        default:
            echo "$color Is Not My Favourite Color. <br>";
            break;
    }
    echo "===================LOOP STRUCTURE===================" . "<br>";
    echo "--For Loop:<br>";
    for($i=0; $i<3; $i++){
        echo "I love Bangladesh<br>";
    }
    echo "--While Loop:<br>";
    $i = 0;
    while($i<3){
        echo "I love to Travel <br>";
        $i++;
    }
    echo "--Do While Loop:<br>";
    $i = 1;
    do{
        echo "$i. This is Batch-71 <br>";
        if($i>2){
            break;
        }
        $i++;
    }while(true);
    echo "===================FUNCTIONS===================" . "<br>";

    echo "Perameterize Function: ";
    function Hello($fname = "Guest", $lname = ""){
        echo "Hello, $fname $lname.";
    }
    Hello("Moksed", "Islam");

    echo "<br> Named Argument Function: ";
    function makeCofee($type = "Black", $size = "Medium"){
        echo "Hello, Please Make A $size Size $type Cofee.";
    }
    makeCofee(size:"large", type:"Orange");

    echo "<br>Type Function With Return Type: ";
    function add(int $a = 0, float $b = 0):float{
       return  $a + $b;
    }
    echo add(10, 20.50);
    
    echo "<br> Global Variable Example: ";
    $globalVar = "Global Variable";
    function globalExample(){
        global $globalVar;
        echo "Hello, $globalVar";
    }
    globalExample();

    echo "<br> Annonymous Function/Clouser : ";
    $annonymous = function(){
        echo "Hello, I am Annonymous Function.";
    };
    $annonymous();

    echo "<br> Annonymous Function/Clouser With Perameter : ";
    $annPer = function()use($globalVar){
        echo "Hello, I am {$globalVar} in Annonymous Function.";
    };
    $annPer();
?>

