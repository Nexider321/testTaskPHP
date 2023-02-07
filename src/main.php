<?php

declare(strict_types=1);

namespace src;

use src\Tests\Bootstrap;
use src\Tests\TreeTest;

require_once __DIR__.'/../vendor/autoload.php';
$appleTrees = 10;
$pearTrees = 25;
Bootstrap::Tests();

$garden = new Garden();
for ($i = 1; $i <= $appleTrees; $i++) {
    $garden->addTree(new Tree($i, 'apple'));
}
for ($i = 11; $i <= $pearTrees; $i++) {
    $garden->addTree(new Tree($i, 'pear'));
}
$garden->collectFruits();
$collectedFruit = $garden->getCollectedFruit();

echo 'Собрано яблоков: ' . $collectedFruit['apple'] . PHP_EOL;
echo 'Собрано груш: ' . $collectedFruit['pear'] . PHP_EOL;
