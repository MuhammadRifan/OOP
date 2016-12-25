<?php

require 'Buah.php';
/*
 * Class Jeruk membutuhkan class Buah, karena Jeruk merupakan buah.
 * Sehingga class jeruk akan meng-implementasikan class Buah, dengan
 * menambah 'implements' pada saat pembuatan class Jeruk.
 */

class Jeruk implements Buah
{

}


$jeruk = new Jeruk();
var_dump($jeruk->ambilWarna());
