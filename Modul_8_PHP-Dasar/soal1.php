<?php

$gajipokok = 325000;
$tunjangan = 120000;

$gajikotor = $gajipokok + $tunjangan;
$pajak = 0.10 * $gajikotor;
$gajibersih = $gajikotor - $pajak;

echo "Gaji Pokok Obi adalah $gajipokok <br>";
echo "Tunjangan Obi adalah $tunjangan <br>";
echo "Pajaknya adalah $pajak <br>";
echo "Jadi Total Gaji Bersih yang di terima Obi adalah $gajibersih"

?>