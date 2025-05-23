<?php 
$nilai = 85;
 if($nilai >= 90 && $nilai <= 100){
    echo "Nilai A";
 } elseif ($nilai >= 80 && $nilai <= 89){
    echo "Nilai AB";
 } elseif ($nilai >= 70 && $nilai <= 79){
    echo "Nilai B";
 } elseif ($nilai >= 60 && $nilai <= 69){
    echo "Nilai BC";
 } elseif ($nilai >= 0 && $nilai <= 59){
    echo "Nilai C";
 } else {
    echo "Nilai tidak ditemukan";
 }

 ?>