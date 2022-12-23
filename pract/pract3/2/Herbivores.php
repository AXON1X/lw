<?php
class Herbivores extends Animals
{
    public function __construct()
    {
        parent::__construct('herbivores', 'rabbit');
    }
    public function foodCalculation(): string
    {
        if ($this->typeAnimal === 'herbivores') {
            $this->amountFood = 3;
            return "Количество условных единиц пищи : {$this->amountFood} ";
        }
        return "Please, enter the type of animal correctly";
    }

    public function foodTypeAnimals(): string
    {
        if ($this->typeAnimal === 'herbivores') {
            $this->foodType = "grass and cereals";
            return "Тип требуемой пищи : {$this->foodType} ";
        }
        return "Please, enter the type of animal correctly";
    }
}