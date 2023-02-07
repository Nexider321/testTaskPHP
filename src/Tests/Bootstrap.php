<?php
declare(strict_types=1);

namespace src\Tests;

final class Bootstrap
{
    public static function Tests()
    {

        $tree = new TreeTest();
        $tree->testCollectFruit();
        $garden = new GardenTest();
        $garden->testCollectFruits();
    }

}