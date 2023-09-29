<?php

$x = 10;
$x = 20;
$x = 30;
echo $x;

echo PHP_EOL;

define('DB_SERVER', 'localhost');
// const $y = 10;


echo DB_SERVER;

echo PHP_EOL;

$name = "Kamrul";
$age = "32";

printf("My name is %s my and my age is %d", $name, $age);

$age = 20;
$hasID = true;

if ($age >= 18 && $hasID) {
    echo "You can enter the club";
}


echo PHP_EOL;


$globalVar = 100; // Global variable

function myFunction()
{
    $localVar = 50; // Local variable within the function
    global $globalVar; // Accessing global variable within the function
    echo "Local Variable: " . $localVar . "<br>";
    echo "Global Variable inside function: " . $globalVar . "<br>";
}

myFunction();
// echo "Local Variable outside function: " . $localVar; // Error: $localVar is not accessible here
echo "Global Variable outside function: " . $globalVar;


echo PHP_EOL;


function test1()
{
    global $a;
    echo $a;
}

function test2()
{
    $a = 20;
    echo $a;
}

test2();



$name = "kamrul";
$age = 32;
$price = 19.99;
$fruits = array('apple', 'banana', 'cherry');

class person
{
    public $name;
    public $age;
}

echo PHP_EOL;

/*$person1 = new person();
$person1 -> name = "Hasan";
$person1 ->age = 25; */

$result = ((20 + 5) * 3) / 4;

echo "result. $result";


// if ($marks >= 60 && $marks < 80) {
//     echo "Passed";
//     } else {
//     echo "Failed";
//     } 

echo "Hello, welcome to the world of PHP programming!";


for ($i = 2; $i <= 10; $i += 2) {
    echo $i . "\n";
}


function greet($name)
{
    echo "Hello." . $name . "!";
}

greet("Kamrul Hasan");

function factorial($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$result = factorial(5);
echo "The factorial of $number is $result";

echo PHP_EOL;

function fibonacci($n)
{
    $fib = [];
    $fib[0] = 0;
    $fib[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        echo $fib[$i] . "\n";
    }
}

fibonacci(10);


PHP_EOL;

// $student = array(
//     'name' => 'Alice',
//     'age' => 22,
//     'grade' => 'A'
// );

// echo "Age of the student: " . $student['age'];


$student = array(
    'name' => 'Alice',
    'age' => 22,
    'grade' => 'A'
);

if (array_key_exists('grade', $student)) {
    echo "The 'grade' key exists in the array.";
} else {
    echo "The 'grade' key does not exist in the array.";
}

$numbers = [100, 200, 50, 40, 50];

foreach ($numbers as $value) {
    echo $value . "\n";
}


$names = ['Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni'];


function findNamesStartWithM(string $name): bool
{

    $filteredString = substr($name, 0, 1);
    return ($filteredString === 'M');
}

$filteredNames = array_filter($names, 'findNamesStartWithM');

foreach ($filteredNames as $name) {
    echo $name . "\n";
}

$originalString = 'Hello, World!';
$reversedString = strrev($originalString);

echo $reversedString;




// Task 1:

// Create an associative array called $student with the following key-value pairs:

// 'name' => 'Alice', 'age' => 22, 'grade' => 'A'

// Print the age of the student.



// Task 2:

// Create an associative array called $student with the key-value pairs:

// 'name' => 'Alice', 'age' => 22, 'grade' => 'A'

// Check if the 'grade' key exists in the array using array_key_exists() and print the result.



// Task 3:

// Create an array called $numbers with values 100, 200, 50, 40, 50.

// Use a foreach loop to print each value in the array.



// Task 4:

// Create an array called $names with values 'Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', ‘Moni’.

// Use the array_filter() function to filter names that start with the letter 'M'.

// Print the filtered names.



// Task 5:

// Create a string variable $originalString with the value 'Hello, World!'.

// Use the strrev() function to reverse the string.

// Print the reversed string.

?>