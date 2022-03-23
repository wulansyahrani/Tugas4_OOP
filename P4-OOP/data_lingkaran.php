<?php 
require_once('class_lingkaran.php');

echo "Nilai PHI : " . Lingkaran::PHI . "<br>";
$lingkaran1 = new Lingkaran(10);
$lingkaran2 = new Lingkaran(4);

echo "Luas Lingkaran 1: " . $lingkaran1->getLuas() . "<br>";
echo "Luas Lingkaran 2: " . $lingkaran2->getLuas() . "<br>";
echo "<hr>";
echo "Keliling Lingkaran 1: " . $lingkaran1->getKeliling() . "<br>";
echo "Keliling Lingkaran 2: " . $lingkaran2->getKeliling() . "<br>";
?>