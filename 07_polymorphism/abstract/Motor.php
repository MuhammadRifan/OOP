<?php

require_once 'Kendaraan.php';
/*
 * Class Motor merupakan hasil turunan dari class Kendaraan,
 * karena Motor merupakan sebuah kendaraan.
 *
 * Sehingga class Motor akan meng-extends class Kendaraan, dengan
 * menambah 'extends' pada saat pembuatan class Motor.
 */

class Motor extends Kendaraan
{
    public function nyalakanMesin()
    {
        echo 'Mesin menyala....'.PHP_EOL;
    }
}
