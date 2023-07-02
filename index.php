<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
<h1> Nivin Shabat </h1>
</div>



    <div class="content">
        <h2 id="A"> Welcome to My Homework Website </h2>
        <h3 id="B"> I am possianate about photographal </h3>
    </div>

<div class="question">
    <div class="qo-1"> 
    <p class="qo_item"> #1 </P>
    <P> Write a PHP program to check whether the first two characters and last two characters of a give string are same.</P>
                
            <?php
       
function checkCharacters($string) {
    $length = strlen($string);

    if ($length < 2) {
        return false;
    }

    $firstTwo = substr($string, 0, 2);
    $lastTwo = substr($string,-2);

    return $firstTwo === $lastTwo;
}

// Example usage
$string1 = "nivin";
$string2 = "abaab";

var_dump(checkCharacters($string1)); // Output: bool(false)
var_dump(checkCharacters($string2)); // Output: bool(true)

?>
</div>

<div class="qo-2">
<p class="qo_item"> #2 </P>
<p> 
Write a PHP program to check if a given string starts with 'Go' or not. (Don't use "str_starts_with" function)</p>
<?php

function startsWithGo($string) {
    $prefix = 'Go';
    $prefixLength = strlen($prefix);//2

    if (strlen($string) < $prefixLength) {
        return false;
    }

    $substring = substr($string, 0, $prefixLength);

    return $substring === $prefix;
}

// Example usage
$string1 = "Goose";
$string2 = "Hello";
$string3 = "Golang";

var_dump(startsWithGo($string1)); // Output: bool(true)
var_dump(startsWithGo($string2)); // Output: bool(false)
var_dump(startsWithGo($string3)); // Output: bool(true)

?>
</div>

<div class="qo-3">
<p class="qo_item"> #3 </P>
<p> Write a PHP program to check if a given positive number is a multiple of 3 or a multiple of 7 </p>

<?php

function isMultipleOfThreeOrSeven($number) {
    if($number<0)
    echo "sorry the number is negative" ."<br>" ;
    if ($number % 3 === 0 || $number % 7 === 0) {
        return true;
    } else {
        return false;
    }
}

// Example usage
$number1 = -9;
$number2 = 14;
$number3 = 21;

var_dump(isMultipleOfThreeOrSeven($number1)); // Output: bool(true)
var_dump(isMultipleOfThreeOrSeven($number2)); // Output: bool(true)
var_dump(isMultipleOfThreeOrSeven($number3)); // Output: bool(true)
?>
</div>


<div class="qo-4">
<p class="qo_item"> #4 </P>
<p> Write a PHP program to check the largest number among three given numbers </p>
<?php

function checklargenumber($number1,$number2,$number3){
    $maxNumber=max($number1,$number2,$number3);
    return $maxNumber;
   
}

$num1 = 10;
$num2 = 25;
$num3 = 15;

$result = checklargenumber($num1, $num2, $num3);
echo "The largest number among $num1, $num2, and $num3 is: $result";

?>
</div>

<div class="qo-5">
<p class="qo_item"> #5 </P>
<p> 
Write a PHP program to check which number nearest to the value 100 among two given integers. Return 0 if the two numbers are equal</p>
<?php

function findNearestTo100($number1, $number2) {
    if ($number1 == $number2) {
        return [$number1, $number2];
    }

    $distance1 = abs(100 - $number1);
    $distance2 = abs(100 - $number2);

    if ($distance1 < $distance2) {
        return [$number1];
    } elseif ($distance2 < $distance1) {
        return [$number2];
    } else {
        return [$number1, $number2];
    }
}
$num1 = 80;
$num2 = 100;
$num3 = 105;

$result1 = findNearestTo100($num1, $num2);
$result2 = findNearestTo100($num1, $num3);

echo "Among $num1 and $num2, the number(s) nearest to 100 is/are: " . implode(", ", $result1) . "<br>";
echo "Among $num1 and $num3, the number(s) nearest to 100 is/are: " . implode(", ", $result2) . "<br>" ;

?>
</div>


<div class="qo-6">
<p class="qo_item"> #6 </P>
<p> 
Write a PHP program to find the larger value from two positive integer values that is in the range 20-30 inclusive or return 0 if neither is in that range.</p>
<?php
function findLargeNumber($num1,$num2) {
    if($num1<0 || $num2<0)
    echo " sorry the number is negative" ."<br>";
    if ($num1 >= 20 && $num1 <= 30 && $num2 >= 20 && $num2 <= 30) {
        return max($num1, $num2); 
    }else{
        return 0;
    }

}
    $num1=-25;
    $num2=30;
    $result=findLargeNumber($num1,$num2);
    echo "The largest number between $num1 and $num2 is" . $result;
    ?>
    </div>

    
<div class="qo-7">
<p class="qo_item"> #7 </P>
<p> Write a PHP program to count the number of occurrences of any digit in a string.</p>
<?php
function countDigitOccurrences($string) {
    $digitOccurrences = array_count_values(str_split($string));

    $digitOccurrences = array_filter($digitOccurrences, function ($key) {
        return is_numeric($key);
    }, ARRAY_FILTER_USE_KEY);

    return $digitOccurrences;
}

$string = "Hello12223345World";

$digitOccurrences = countDigitOccurrences($string);

foreach ($digitOccurrences as $digit => $count) {
    echo "Occurrences of digit $digit: $count" ."<br>";
}


?>
</div>

<div class="qo-8">
<p class="qo_item"> #8 </P>
<p> Write a PHP program to return the sum of digits of a an integer number. </p>
<?php
function SumOfDigits($number){
    $sum=0;
    $number=abs($number);
    while($number>0){
        $digit=$number%10;
        $sum+=$digit;
        $number=(int)($number/10);
    }
    return $sum;
}
$number=12345;
$sum=SumOfDigits($number);
echo "the sum of the digits is $sum";

?>
</div>
<div class="qo-9">
<p class="qo_item"> #9 </P>
<p>Write a PHP program to reverse any string. (Don't use "strrev" function)</p>
<?php
function reverseString($string) {
    $reversedString = '';
    $length = strlen($string);

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedString .= $string[$i];
    }

    return $reversedString;
}

$string = "Hello, World!";

$reversedString = reverseString($string);
echo "Reversed string: $reversedString";

?>
</div>


</body>
</html>


