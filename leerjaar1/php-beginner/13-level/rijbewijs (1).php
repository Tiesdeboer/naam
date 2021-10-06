<?php
//Input leeftijd
$leeftijd = readline('Hoe oud ben je?');

// Mag rijden ja of nee
if($leeftijd >= "16,5") {
    echo "Je mag beginnen met rijlessen!";
}

if($leeftijd < "16,5") {
    echo "Helaas, je mag nog niet beginnen met rijlessen.";
}

?>