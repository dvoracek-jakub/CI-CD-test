<?php

/** Tento soubor bude pri buildeni zkopirovan do image */

$dt = new DateTime();
echo "Hello world, the date and time is: " . $dt->format('d.m.Y H:i:s');

print_r($_SERVER);