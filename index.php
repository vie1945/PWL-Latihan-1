<?php
include "Mahasiswa.php";

$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika');

print_r($mahasiswaTI->getData());
echo "<br><br>";

$mahasiswaSI = new Mahasiswa();
$mahasiswaSI->setData('A12.2000.00001', 'Junior', 'Sistem Informasi');

print_r($mahasiswaSI->getData());
echo "<br><br>";

$mahasiswaMI = new Mahasiswa();
$mahasiswaMI->setData('A13.2000.00001', 'Budi', 'Manajemen Informatika');

print_r($mahasiswaMI->getData());
echo "<br><br>";

echo "<h3>Data Mahasiswa</h3>";
$mahasiswaTI->tampilData();
$mahasiswaSI->tampilData();
$mahasiswaMI->tampilData();
?>