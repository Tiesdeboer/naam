<?php

echo "Welke operator wil je gebruiken(+, -): ";
$operator = readline();
if ($operator == "+") {
    echo "Eerste getal: ";
    $number1 = readline();
    echo "Tweede getal: ";
    $number2 = readline();
    echo $number1 + $number2;
}
if ($operator == "-") {
    echo "Eerste getal: ";
    $number1 = readline();
    echo "Tweede getal: ";
    $number2 = readline();
    echo $number1 - $number2;
}
?>
