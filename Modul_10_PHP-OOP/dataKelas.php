
<?php

require_once 'kelas/mahasiswa.php';


$mhs1 = new Mahasiswa("Bimo Elang");
$mhs1->setNIM(243307070);
$mhs1->setKelas("2C");
$mhs1->setjurusan("Teknologi Informasi");

echo "<h1>Mahasiswa 1</h1>";
echo ("Nama: " . $mhs1->getNama()); echo"<br>";
echo ("NIM: " . $mhs1->getNIM()); echo "<br>";
echo ("Kelas: " . $mhs1->getKelas()); echo "<br>";
echo ("Jurusan: " . $mhs1->getJurusan()); echo "<br>";

$mhs2 = new Mahasiswa("Adi Nugroho");
$mhs2->setNIM(243307061);
$mhs2->setKelas("2C");
$mhs2->setjurusan("Teknologi Informasi");

echo "<h1>Mahasiswa 2</h1>";
echo ("Nama: " . $mhs2->getNama()); echo"<br>";
echo ("NIM: " . $mhs2->getNIM()); echo "<br>";
echo ("Kelas: " . $mhs2->getKelas()); echo "<br>";
echo ("Jurusan: " . $mhs2->getJurusan()); echo "<br>";

?>
