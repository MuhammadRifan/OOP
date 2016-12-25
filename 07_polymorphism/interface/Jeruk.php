<?php

require 'Buah.php';
/*
 * Class Jeruk membutuhkan class Buah, karena Jeruk merupakan buah.
 * Sehingga class jeruk akan meng-implementasikan class Buah, dengan
 * menambah 'implements' pada saat pembuatan class Jeruk.
 */

class Jeruk implements Buah
{
    /* Jika method ini tidak di deklarasikan ulang,
     * maka akan muncul error
     */

    public function ambilWarna()
    {
        echo 'Warna Jeruk adalah Orange';
    }
}
