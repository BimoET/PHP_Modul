<?php

$siswa = [
    ["Nomor" => 1, "Poin" => 75, "Nama" => "Adi"],
    ["Nomor" => 2, "Poin" => 80, "Nama" => "Joni"],
    ["Nomor" => 3, "Poin" => 65, "Nama" => "Jihan"],
    ["Nomor" => 4, "Poin" => 70, "Nama" => "Aya"],
    ["Nomor" => 5, "Poin" => 85, "Nama" => "Ita"],
    ["Nomor" => 6, "Poin" => 90, "Nama" => "Budi"],
    ["Nomor" => 7, "Poin" => 95, "Nama" => "Tini"],
    ["Nomor" => 8, "Poin" => 65, "Nama" => "Sari"]
];

// a) 
echo "a) Poin siswa dengan nomor urut 5:<br>";
foreach ($siswa as $data) {
    if ($data ["Nomor"] == 5) {
        echo "Nama: " . $data["Nama"] . ",<br> Dengan Poin: " . $data["Poin"] . "<br><br>";
        break;
    }
}

// b) 
echo "b) Siswa yang memiliki Poin 90:<br>";
$adaPoin90 = false;
foreach ($siswa as $data) {
    if ($data ["Poin"] == 90) {
        echo $data ["Nama"] . " Memiliki Poin 90 <br>";
        $adaPoin90 = true;
    }
}
if (!$adaPoin90) {
    echo "Tidak ada siswa yang memiliki poin 90.<br>";
}
echo "<br>";

// c) 
echo "c) Siswa yang memiliki poin 100:<br>";
$adaPoin100 = false;
foreach ($siswa as $data) {
    if ($data ["Poin"] == 100) {
        echo $data ["Nama"] . "<br>";
        $adaPoin100 = true;
    }
}
if (!$adaPoin100) {
    echo "Tidak ada siswa yang memiliki poin 100.<br>";
}
?>
