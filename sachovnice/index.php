<?php

require_once 'Square.php';
require_once 'ChessKnightPathFinder.php';

$start = new Square(0, 0);
$end = new Square(7, 7);

$finder = new ChessKnightPathFinder();
$path = $finder->shortestHorseJourney($start, $end);

if (empty($path)) {
    echo "Path has not been found.";
} else {
    echo "Path: ";
    foreach ($path as $policko) {
        echo '(' . $policko->getX() . ',' . $policko->getY() . ') ';
    }
}

//pro vypsání stačí spustit "php index.php"