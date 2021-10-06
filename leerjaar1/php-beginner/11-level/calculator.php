<?php
echo "Welke opdracht wil je uitvoeren(+, - , %)";
$operator = readline(); //Input operator
if ($operator == "+") { //Check voor operator +.
    echo "Eerste nummer:";
    $num1 = readline(); //Input eerste cijfer.
    if (!is_numeric($num1)) {
        echo "geen getal";
        exit;
    }
    echo "Tweede nummer:";
    $num2 = readline(); //Input tweede cijfer.
    if (!is_numeric($num2)) {
        echo "geen getal";
        exit;
    }
    echo $num1 + $num2; //Bereken totaal.
} elseif ($operator == "-") { //Check voor operator -.
    echo "Eerste nummer:"; 
    $num1 = readline(); //Input eerste cijfer.
    if (!is_numeric($num1)) {
        echo "geen getal";
        exit;
    }
    echo "Tweede nummer:";
    $num2 = readline();//Input tweede cijfer.
    if (!is_numeric($num2)) {
        echo "geen getal";
        exit;
    }
    echo $num1 - $num2; //Bereken totaal.
} elseif ($operator == "%") { //Check voor operator -.
    echo "Eerste nummer:"; 
    $num1 = readline(); //Input eerste cijfer.
    if (!is_numeric($num1)) {
        echo "geen getal";
        exit;
    }
    echo "Tweede nummer:";
    $num2 = readline();//Input tweede cijfer.
    if (!is_numeric($num2)) {
        echo "geen getal";
        exit;
    }
    echo $num1 % $num2; //Bereken totaal.
} else { //Check of operator invalied is.
    echo "geen geldige operatie";
}
?>