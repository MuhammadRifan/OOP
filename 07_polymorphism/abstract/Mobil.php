<?php

require_once 'Kendaraan.php';
/*
 * Class Mobil merupakan hasil turunan dari class Kendaraan,
 * karena Mobil merupakan sebuah kendaraan.
 *
 * Sehingga class Mobil akan meng-extends class Kendaraan, dengan
 * menambah 'extends' pada saat pembuatan class Mobil.
 */

class Mobil extends Kendaraan
{
    public function nyalakanMesin()
    {
        echo 'Mesin menyala....'.PHP_EOL;
    }
}
