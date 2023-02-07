<?php

declare(strict_types=1);

namespace src;

require_once __DIR__.'/../vendor/autoload.php';

$garden = new Garden();
for ($i = 1; $i <= 10; $i++) {
    $garden->addTree(new Tree($i, 'apple'));
}
for ($i = 11; $i <= 25; $i++) {
    $garden->addTree(new Tree($i, 'pear'));
}
$garden->collectFruits();
$collectedFruit = $garden->getCollectedFruit();

echo 'Собрано яблоков: ' . $collectedFruit['apple'] . PHP_EOL;
echo 'Собрано груш: ' . $collectedFruit['pear'] . PHP_EOL;
