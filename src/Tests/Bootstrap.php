<?php
declare(strict_types=1);

namespace src\Tests;

final class Bootstrap
{
    /**
     * @throws \Exception
     */
    public static function Tests(): void
    {
            $tree = new TreeTest();
            $tree->testCollectFruit();
            $garden = new GardenTest();
            $garden->testCollectFruits();

    }

}