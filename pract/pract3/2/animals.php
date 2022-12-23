<?php
abstract class Animals
{
    protected string $typeAnimal;
    protected string $nameAnimal;

    protected function __construct(
        string $typeAnimal,
        string $nameAnimal
    ) {
        $this->typeAnimal = $typeAnimal;
        $this->nameAnimal = $nameAnimal;
    }
    abstract public function foodCalculation(): string;

    abstract public function foodTypeAnimals(): string;
}