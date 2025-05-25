<?php

require_once 'kelas/akunBank.php';

$data1=new akunBank("001", 10000);
$data2=new akunBank("002", 20000);

$data1->setNama("Bimo");
$data1->tambahUang(15000);
echo "<h1>Akun 1</h1>";
echo "Nomor Akun: " . $data1->getAccountNumber() . "<br>";
echo "Nama: " . $data1->getNama() . "<br>";
echo "Saldo: Rp. " . $data1->tampilkanSaldo() . "<br>";
echo "Pajak: Rp. " . $data1->hitungPajak() . "<br>";

$data2->setNama("Budi");
$data2->tambahUang(10000);
echo "<h1>Akun 2</h1>";
echo "Nomor Akun: " . $data2->getAccountNumber() . "<br>";
echo "Nama: " . $data2->getNama() . "<br>";
echo "Saldo: Rp. " . $data2->tampilkanSaldo() . "<br>";
echo "Pajak: Rp. " . $data2->hitungPajak() . "<br>" . "<br>";

$data1->kurangiUang(5000);
$data2->kurangiUang(10000);

echo "<h2>Saldo Setelah Pengurangan</h2>";
echo "Akun 1: Rp. " . $data1->tampilkanSaldo() . "<br>";
echo "Akun 2: Rp. " . $data2->tampilkanSaldo() . "<br>";