<?php
$name = readline("Wat is je naam:"); //Vraag om naam.
$year = readline("Wat is je geboortejaar:"); //Vraag naar geboortejaar.
echo $name . " " .  "is " . date("Y") - $year . " " . "jaar oud.";
?>