<?php
//vraagt leeftijd
$leeftijd = readline ("Hoe oud ben je? ");

//geeft aan je mag niet rijden
if ($leeftijd < "16,5") {
    echo "Helaas, je mag niet beginnen met rijlessenS";
  }
 //geeft aan je mag rijden
if ($leeftijd >= "16,5") {
    echo "Je mag beginnen met rijlessen";
}
?>