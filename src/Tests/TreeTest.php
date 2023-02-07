<?php
declare(strict_types=1);

namespace src\Tests;

use Exception;
use src\Tree;

final class TreeTest
{
    /**
     * @throws Exception
     */
    public function testCollectFruit() {
        $tree = new Tree(1, 'apple');
        $tree->collectFruit();
        if (!($tree->getFruitCount() >= 40 && $tree->getFruitCount() <= 50)) {
            throw new Exception('Тест не пройден: collectFruit яблочное дерево' . PHP_EOL);
        }

        $tree = new Tree(2, 'pear');
        $tree->collectFruit();
        if (!($tree->getFruitCount() >= 0 && $tree->getFruitCount() <= 20)) {
            throw new Exception('Тест не пройден: collectFruit груши' . PHP_EOL);

        }
    }
}