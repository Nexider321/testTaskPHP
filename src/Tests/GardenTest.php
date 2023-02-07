<?php
declare(strict_types=1);

namespace src\Tests;

use Exception;
use src\Garden;
use src\Tree;

final class GardenTest
{


    /**
     * @throws Exception
     */
    public function testCollectFruits() {
        $garden = new Garden();
        for ($i = 1; $i <= 10; $i++) {
            $garden->addTree(new Tree($i, 'apple'));
        }
        for ($i = 11; $i <= 25; $i++) {
            $garden->addTree(new Tree($i, 'pear'));
        }
        $garden->collectFruits();
        $collectedFruit = $garden->getCollectedFruit();

        if (!($collectedFruit['apple'] >= 400 && $collectedFruit['apple'] <= 500)) {
            throw new Exception('Тест не пройден: collectFruits для яблок' . PHP_EOL);

        }
        if (!($collectedFruit['pear'] >= 0 && $collectedFruit['pear'] <= 500)) {
            throw new Exception('Тест не пройден: collectFruits для груш' . PHP_EOL);

        }
    }
}