<?php
require_once 'animals.php';
require_once 'Predators.php';
require_once 'Omnivores.php';
require_once 'Herbivores.php';

$animal1 = new Predators();
$animal2 = new Omnivores();
$animal3 = new Herbivores();

print_r($animal1);
echo $animal1->foodCalculation();
echo "\n";
echo $animal1->foodTypeAnimals();
echo "\n";
echo "\n";
print_r($animal2);
echo $animal2->foodCalculation();
echo "\n";
echo $animal2->foodTypeAnimals();
echo "\n";
echo "\n";
print_r($animal3);
echo $animal3->foodCalculation();
echo "\n";
echo $animal3->foodTypeAnimals();