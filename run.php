<?php

require __DIR__ . '/vendor/autoload.php';

use App\StringReverser;
use Tests\StringReverserTest;

$stringReverser = new StringReverser();
echo $stringReverser->reverseString('can`t');



