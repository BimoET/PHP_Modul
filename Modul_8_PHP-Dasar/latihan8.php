<?php

// data kelas dengan array 2 dimensi
$array = array(
    "1C" => array("Udin", "Ismail", "Adi"),
    "1D" => array("Lukman", "Fajri", "Mahmud")
);
// menampilkan data array
print_r($array);
echo "<br>";
// menampilkan kelas 1c
print_r($array["1C"]);
echo "<br>";
// menampilkan data kelas 1d dengan index 0
echo $array["1D"][0];
echo "<br>";
// tampilakan Fajri
echo $array["1D"][1];
echo "<br>";
// tampilakan Adi
echo $array["1C"][2];
echo "<br>";

// data kelas bisa di tulis juga dengan
$array_simple = [
    "1C" => ["Udin", "Ismail", "Adi"],
    "1D" => ["Lukman", "Fajri", "Mahmud"]
];
    