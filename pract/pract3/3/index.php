<?php
require_once 'File.php';
require_once 'Directory.php';
require_once 'Disk.php';

$firstFile  = new File("Первый Файл");

$firstDirectory = new Directorya("Первая");

$secondDirectory = new Directorya("Вторая");

$secondFile  = new File("Второй Файл");

$firstDisk = new Disk("A");

$secondDirectory->addElement($secondFile);

$firstDirectory->addElement($secondDirectory);

$firstDirectory->addElement($firstFile);

$firstDisk->addElement($firstDirectory);

echo $firstDisk->render() . PHP_EOL;

$secondDisk = new Disk("B");

$fileB1 = new File("Первый файл");

$fileB2 = new File("Второй файл");

$fileB3 = new File("Третий файл");

$secondDisk->addElement($fileB1);

$secondDisk->addElement($fileB2);

$secondDisk->addElement($fileB3);

echo $secondDisk->render() . PHP_EOL;

$thirdDisk = new Disk("C");

$directoryC = new Directorya("Папка диска");

$fileC = new file("Файл дискa");

$thirdDisk->addElement($directoryC);

$directoryC->addElement($fileC);

echo $thirdDisk->render() . PHP_EOL;

$diskArr[] = $firstDisk;

$diskArr[] = $secondDisk;

$diskArr[] = $thirdDisk;

$tempDisk = new Disk("Temp");

foreach ($diskArr as $value) {
    for ($i = 1; $i < count($diskArr); $i++) {
        if ($diskArr[$i]->getCounter() > $diskArr[$i - 1]->getCounter()) {

            $tempDisk = $diskArr[$i];

            $diskArr[$i] = $diskArr[$i - 1];

            $diskArr[$i - 1] = $tempDisk;
        }
    }
}

foreach ($diskArr as $value) {
    echo ($value->getName());
}
Footer
© 2022 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status