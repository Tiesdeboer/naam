<?php
echo "Welke opdracht wil je uitvoeren(+, -)";
$operator = readline();
if ($operator == "+") {
    echo "Eerste nummer:";
    $num1 = readline();
    echo "Tweede nummer:";
    $num2 = readline();
    echo $num1 + $num2;
} elseif ($operator == "-") {
    echo "Eerste nummer:";
    $num1 = readline();
    echo "Tweede nummer:";
    $num2 = readline();
    echo $num1 - $num2;
} else {
    echo "Deze operator bestaat niet.";
}
?>