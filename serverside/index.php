<?php


//Arithemtic Operator
$firstNumber = 50;
$secondNumber = 1000;
$sumOfFirstAndSecondNumber = $firstNumber + $secondNumber;
//echo "The sum of the first number and the second number is " . $sumOfFirstAndSecondNumber;



//Comparison Operator
if ($firstNumber > $secondNumber) {

    echo "First number is greater than second number";
} else {

    echo "second number is greater than first number";
}



echo "<br/>";


$favcolor = "ergwergwrgwe";

//Switch 
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

echo "<br/>";


//functions
function buyRice()
{
    //take keke to market 
    //withdraew 
    //retrun bacl home
    echo "Rice" . "<br/>";

}


function washRice()
{

    echo "Washed Rice";

}

buyRice();
washRice();




function sumTwoNumbers($firstNumber, $secondNumber)
{

    $result = $firstNumber + $secondNumber;
    echo $result;


}


sumTwoNumbers(9, 9);
sumTwoNumbers(10, 9);






?>