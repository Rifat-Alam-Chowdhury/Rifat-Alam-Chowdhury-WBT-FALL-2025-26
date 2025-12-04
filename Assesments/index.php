<?php


echo"<h1> Q 1. Write a PHP script to calculate the area and perimeter of a Rectangle, and display the result. Hints: The area of a Rectangle = length × width, perimeter = 2 × (length + width)</h1>";



echo"<h2>Answer</h2>";


$length = 5;
$height = 10;

$area = $length * $height;
$perimeter = 2 * ($length + $height);

echo "  <h3>The area is $area and the perimeter is $perimeter</h3>";

echo"<h1> Q 2. Write a PHP script to calculate the VAT (Value Added Tax) over an amount Hints: VAT = 15% of the amount</h1>";

$amount = 1000;  
$vat = $amount * 0.15;
$total = $amount + $vat;
 echo"<h2>Answer</h2>";
echo "Amount: $amount <br>";
echo "VAT (15%): $vat <br>";
echo "Total Amount (with VAT): $total";


echo"<h1> Q 3. Write a PHP script to find whether a given number is odd or even Hints: use IF-ELSE</h1>";
echo"<h1>Answer</h1> <br>";
$number=5;
if($number%2==0){
    echo"even";
}
else{
    echo "odd";
}


echo"<h1> Q 4. Write a PHP script to find the largest number from three given numbers Hints: use IF-ELSE </h1>";
echo"<h2>Answer</h2> <br>";


$a = 10;
$b = 25;
$c = 15;

if ($a >= $b && $a >= $c) {
    echo "$a is the largest number";
} elseif ($b >= $a && $b >= $c) {
    echo "$b is the largest number";
} else {
    echo "$c is the largest number";
}



echo"<h1> Q 5.Write a PHP script to print all the odd numbers between 10 to 100 Hints: use LOOP & IF-ELSE </h1>";
echo"<h2>Answer</h2> <br>";

for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . ",";
    }
}

echo"<h1> Q 6.Write a PHP script to search an element from an array Hints: use LOOP, IF-ELSE & ARRAY </h1>";
echo"<h2>Answer</h2> <br>";
$numbers = [10, 20, 30];
$search = 40;
$found = false;

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i];echo " ";
 
}

for ($i = 0; $i < count($numbers); $i++) {
    // echo $numbers[$i];
    if ($numbers[$i] == $search) {
        $found = true;
        break;
    }
}
echo"and";

if ($found) {
    echo "$search is found in the array.";
} else {
    echo "$search is NOT found in the array.";
}

?>


