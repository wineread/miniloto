<?php
$array = range(1, 31);
shuffle($array);
$yusho = array_slice($array, 0, 5);
sort($yusho);
echo "今度のミニロト\n" . implode(".", $yusho) . "\nこの5つの数字で優勝キメます";