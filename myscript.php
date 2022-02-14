<?php

if (sizeof($argv) < 2) {
    die("Не заданы аргументы командной строки\n");
}

$fileXml = $argv[1];

if (substr($fileXml, -3) !== "xml") {
    die("Неверный формат файла\n");
}

$xml = simplexml_load_file($fileXml) or die("Ошибка: Невозможно создать объект");

$cars = [];

foreach ($xml->xpath('//modification') as $node) {
    $cars[] = $node['name'];
}

echo sizeof(array_unique($cars));
echo "\n";


















