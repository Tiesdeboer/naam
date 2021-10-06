<?php

$cars = array (
    array("#","#","#","#"),
    array("#","#","#","#"),
    array("#","#","#","#"),
    array("#","#","#","#"),
  );
  $positionx = 0;
  $positiony = 0;
while (true) {
    if ($positiony == 3 && $positionx == 3) {
        $positionx = 0;
        $positiony = 0;
    }
    if ($positionx == 3) {
        $positiony++;
        $positionx = 0;
        PHP_EOL;
    }
    echo $cars[$positionx][$positiony];
    $positionx++;
    sleep(1);
}
  
?>
