<?php
// segitiga sama kaki
$x = 5;

for ($a = 1; $a <= $x; $a++) {
    for ($b = $x; $b >= $a; $b -= 1) {
        print('&nbsp'); //baris
    }
    for ($c = 1; $c <= $a; $c++) {
        echo '*'; //print * sebanyak $a
    }
    echo "<br/>";
}
