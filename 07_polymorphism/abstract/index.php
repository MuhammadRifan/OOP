<?php

require 'Motor.php';
require 'Mobil.php';

$motor = new Motor();
$motor->nyalakanMesin(); // Hasil : 'Mesin Motor Menyala'
echo $motor->ambilDetailKendaraan();

$mobil = new Mobil();
$mobil->nyalakanMesin(); // Hasil : 'Mesin Mobil Menyala'
$mobil->platNomor = 'L 1838 YJ';
$mobil->namaPemilik = 'Antok Prasetyo';
echo $mobil->ambilDetailKendaraan();
