<?php

namespace App;

require 'vendor/autoload.php';

use BracketsChecker\BracketsChecker;

echo "Enter your string: ";
$row = trim(fgets(STDIN, 1024));

echo "Enter your path to file (started from root directory): ";
$filePath = __DIR__ . '\/../' . trim(fgets(STDIN, 1024));

BracketsChecker::index($row, $filePath);