<?php

$data = [
    ["nama" => "Awa", "umur" => 17],
    ["nama" => "Adi", "umur" => 22],
    ["nama" => "Atta", "umur" => 20],
    ["nama" => "Akin", "umur" => 24],
    ["nama" => "Amba", "umur" => 30],
    ["nama" => "Arkan", "umur" => 21],
    ["nama" => "Dimas", "umur" => 25],
    ["nama" => "Doni", "umur" => 21],
    ["nama" => "Rijul", "umur" => 18],
    ["nama" => "Rafid", "umur" => 24],
    ["nama" => "Rusdi", "umur" => 21],
    ["nama" => "Rahmanda", "umur" => 22],
    ["nama" => "Raka", "umur" => 20],
    ["nama" => "Fatah", "umur" => 23],
    ["nama" => "Feri", "umur" => 22]
];

$json = json_encode($data, JSON_PRETTY_PRINT);

echo "<pre>$json</pre>";

?>
