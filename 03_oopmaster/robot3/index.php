<?php

require 'robot.php';

$robot1 = new robot();
$robot1->setWarna("Merah");
$robot1->setNama("Humanoid");
$robot1->jenis = 2;

$robot1->cekRobot();
echo "<hr>";
var_dump($robot1);
