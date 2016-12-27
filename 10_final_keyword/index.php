<?php
/**
 *
 * Untuk keyword 'final' pada PHP, tidak jauh berbeda dengan bahasa pemrograman yang lain.
 * Keyword ini dipergunakan menentukan fungsi yang tidak dapat di overiding kembali.
 *
 */

class Buah
{
    public function beli()
    {
        echo "beli buah ..." . PHP_EOL;
    }

    //final public function makan() /* fungsi makan() diatur agar tidak dapat di overide*/
    public function makan()
    {
        echo "makan buah ...".PHP_EOL;
    }
}

class Jeruk extends Buah /* Inheritance / pewarisan di dalam OOP */
{
    /* fungsi makan() telah di overide pada class Jeruk() */
    public function makan() 
    {
        echo "makan buah jeruk ...".PHP_EOL;
    }
}

$jeruk = new Jeruk();
$jeruk->beli();
$jeruk->makan();

