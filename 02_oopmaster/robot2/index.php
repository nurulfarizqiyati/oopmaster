<?php
require 'robot.php';

$robot1 = new robot();
$robot1->warna = "Merah"; // digunakan untuk mengisi property pada class
$robot1->nama = "Humanoid"; // caranya yaitu menulis object terlebih dahulu ( $car-> ) lalu nama property nya

echo $robot1->cekrobot(2);
echo "<hr>";

var_dump($robot1);