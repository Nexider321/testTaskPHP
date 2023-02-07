<?php

declare(strict_types=1);

namespace src;

final class Garden
{
    protected array $trees;
    /**
     * @var array|int[]
     */
    protected array $collectedFruit;

    public function __construct()
    {
        $this->trees = [];
        $this->collectedFruit = [
            'apple' => 0,
            'pear' => 0,
        ];
    }

    public function addTree(Tree $tree): void
    {
        $this->trees[] = $tree;
    }


    public function collectFruits(): void
    {
        foreach ($this->trees as $tree) {
            $tree->collectFruit();
            $this->collectedFruit[$tree->getType()] += $tree->getFruitCount();
        }
    }

    public function getCollectedFruit()
    {
        return $this->collectedFruit;
    }
}
