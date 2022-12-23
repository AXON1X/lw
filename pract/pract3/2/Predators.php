<?php
class Predators extends Animals
{
    public function __construct()
    {
        parent::__construct('predator', 'Lion');
    }
    public function foodCalculation(): string
    {
        if ($this->typeAnimal === 'predator') {
            $this->amountFood = 10;
            return "Количество условных единиц пищи : {$this->amountFood} ";
        }
        return "Please, enter the type of animal correctly";
    }

    public function foodTypeAnimals(): string
    {
        if ($this->typeAnimal === 'predator') {
            $this->foodType = "meat";
            return "Тип требуемой пищи : {$this->foodType} ";
        }
        return "Please, enter the type of animal correctly";
    }
}