<?php 

require_once 'kelas/manusia.php';

$andi=new Manusia();
$andi->setNama("Andi Pratama");

$budi=new Manusia();
$budi->setNama("Budi Santoso");

echo($andi->getNama());
echo("<br>");

echo($budi->getNama());
echo("<br>");

$NIK=new Manusia();
echo($NIK->getNIK());
echo("<br>");
$bimo=new Manusia();
$bimo->setNama("Bimo Elang .T");

echo($bimo->getNama());
echo("<br>");

$umurku=new Manusia();
$umurku->setUmur(19);
echo($umurku->getUmur());

?>