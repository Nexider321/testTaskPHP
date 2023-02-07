<?php
declare(strict_types=1);

namespace src\Tests;

use src\Tree;

final class TreeTest
{
    public function testCollectFruit() {
        $tree = new Tree(1, 'apple');
        $tree->collectFruit();
        if (!($tree->getFruitCount() >= 40 && $tree->getFruitCount() <= 50)) {
            echo 'Тест не пройден: collectFruit яблочное дерево' . PHP_EOL;
        }

        $tree = new Tree(2, 'pear');
        $tree->collectFruit();
        if (!($tree->getFruitCount() >= 0 && $tree->getFruitCount() <= 20)) {
            echo 'Тест не пройден: collectFruit груши' . PHP_EOL;
        }
    }
}