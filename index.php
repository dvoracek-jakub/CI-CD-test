<?php

/** Tento soubor bude pri buildeni zkopirovan do image */

$dt = new DateTime();
echo "Hello world, the time is: " . $dt->format('d.m.Y H:i:s');