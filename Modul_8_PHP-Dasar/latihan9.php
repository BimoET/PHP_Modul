<?php

// contoh fungsi
function writeMsg($nama) {
    echo "Selamat datang $nama <br>";
}

writeMsg("Ahmad");//panggilan fungsi

//fungsi dan mengirim nilai balik
function tambah(int $angka1, int $angka2) {
    $a = $angka1 + $angka2;
    return $a; //mengirim nilai a ke pemanggilan
}
$hasil = tambah(5, 5);
echo ($hasil);

