<?php
class Omnivores extends Animals
{
    public function __construct()
    {
        parent::__construct('omnivores', 'brown bear');
    }
    public function foodCalculation(): string
    {
        if ($this->typeAnimal === 'omnivores') {
            $this->amountFood = 9;
            return "Количество условных единиц пищи : {$this->amountFood} ";
        }
        return "Please, enter the type of animal correctly";
    }

    public function foodTypeAnimals(): string
    {
        if ($this->typeAnimal === 'omnivores') {
            $this->foodType = "no matter";
            return "Тип требуемой пищи : {$this->foodType} ";
        }
        return "Please, enter the type of animal correctly";
    }
}