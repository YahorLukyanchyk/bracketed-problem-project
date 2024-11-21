<?php

namespace App;

require 'vendor/autoload.php';

use BracketsChecker\BracketsChecker;

echo "Enter your string: ";
$bracketSequence = trim(fgets(STDIN, 1024));

$service = new BracketsChecker;

$result = $service->check($bracketSequence);

if (!$result) {
    $resultMessage = "Rows are different!\n";
} else {
    $resultMessage = "Rows are correct!\n";
}

echo $resultMessage;