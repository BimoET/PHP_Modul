<?php

/*Operator logika yang bisa digunakan
* ==    Sama Dengan                  $x == $y
* ===   Identical                    $x === $y
* !=    Tidak Sama Dengan            $x != $y
* <>    Tidak Sama Dengan            $x <> $y
* !==   Not Identical                $x !== $y
* >     Lebih Besar dari             $x > $y
* <     Kurang dari                  $x < $y
* >=    Lebih Besar atau sama dengan $x >= $y
* <=    Kurang dari atau sama dengan $x <= $y
* <==>  Spaceship                    $x <=> $y
*/

$t = date("H"); //mendapatkan jam dengan format 1-24
echo "Contoh penggunaan if : <br>";
if ($t < 16) {
    echo "Selamat siang";
}

echo "<br><br> Contoh penggunaan if dan Else : <br>";
if ($t < 20) { 
    echo "Selamat siang";
} else  {
    echo "Selamat malam";
} 

echo "<br><br> Contoh penggunaan Nested if : <br>";
if ($t < 10) {
    echo "Selamat pagi";
} elseif ($t < 16) {
    echo "Selamat sore";
} else {
    echo "Selamat malam";
}