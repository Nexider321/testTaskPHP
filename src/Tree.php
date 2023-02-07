<?php

declare(strict_types=1);

namespace src;

final class Tree
{
    protected int $id;
    protected string $type;
    protected int $fruitCount;


    public function __construct(
        int $id,
        string $type
    ) {
        $this->id = $id;
        $this->type = $type;
        $this->fruitCount = 0;
    }


    /**
     * @throws \Exception
     */
    public function collectFruit(): void
    {
        switch ($this->type) {
            case 'apple':
                $this->fruitCount = rand(40, 50);
                break;
            case 'pear':
                $this->fruitCount = rand(0, 20);
                break;
            default:
                throw new \Exception('Не правильный тип дерева');
        }
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getFruitCount(): int
    {
        return $this->fruitCount;
    }
}
