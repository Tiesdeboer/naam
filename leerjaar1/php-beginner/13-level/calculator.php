<?php 
echo "Welke operatie wilt u uitvoeren? (+, -, %) \r\n";
$operatie = readline("");

if ($operatie == "+" or $operatie == "-" or $operatie == "%") {
    echo "Wat is het eerste nummer? \r\n";
    $nummer1 = readline("");
    if (is_numeric($nummer1) == false) {
        echo $nummer1 . " is geen getal";
        exit;
    }
    
    echo "Wat is het tweede nummer? \r\n";
    $nummer2 = readline("");
    if (is_numeric($nummer2) == false) {
        echo $nummer2 . " is geen getal";
        exit;
    }
    
    if ($operatie == "+") {
        $outcome = $nummer1 + $nummer2;
    } elseif ($operatie == "-") {
        $outcome = $nummer1 - $nummer2;
    } elseif ($operatie == "%") {
        $outcome = $nummer1 % $nummer2;
    }
    echo "Antwoord: " . $outcome;
} else {
    echo $operatie . " is geen geldige operatie";
    exit;
}
?>