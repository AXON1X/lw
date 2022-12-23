<?php
require_once 'Buyer.php';

$user1 = new Buyer("Sokolov", "Vasily", "Sergeevitch", "Moscow", 2, 54367804);
$user2 = new Buyer("Vasilev", "Victor", "Petrovitch", "Tver", 1, 65747484);
$user3 = new Buyer("Panfilov", "Semen", "Sergeevitch", "SanctPeterburg", 5, 12355456);
$user4 = new Buyer("Andreev", "Egor", "Sergeevitch", "SanctPeterburg", 8, 12355456);

$arr[0] = $user1;
$arr[1] = $user2;
$arr[2] = $user3;
$arr[3] = $user4;

for ($i = 0; $i < count($arr) - 1; $i++) {
    for ($j = 0; $j < count($arr) - $i - 1; $j++) {
        if (substr($arr[$j]->getFamily(), 0, 1) > substr($arr[$j + 1]->getFamily(), 0, 1)) {
            $tmp = $arr[$j + 1];
            $arr[$j + 1] = $arr[$j];
            $arr[$j] = $tmp;
        }
    }
}

foreach ($arr as $value) {
    print_r($value);
}

print("Вывод по номеру карты : ");
echo "\n";

for ($i = 0; $i < count($arr); $i++) {
    if (substr($arr[$i]->getCard(), 0, 1) > 0 && substr($arr[$i]->getCard(), 0, 1) < 5) {
        print_r($arr[$i]);
    }
}