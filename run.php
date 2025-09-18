<?php

require __DIR__ . '/vendor/autoload.php';

use App\StringReverser;

$stringReverser = new StringReverser();
echo $stringReverser->reverseString('can`t');



