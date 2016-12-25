<?php

/*
 * Object Interface merupakan kerangka dari sebuah class (bergantung 
 * class yang akan mempergunakan).
 * 
 * Prinsip :
 * - Semua method pada Object Interface harus dengan visibility 'Public'.
 * - 1 Class pengguna interface dapat mengimplementasikan banyak Object 
 *   inteface
 * - Class pengguna interface menggunakan keyword 'implements' untuk
 *   mengimplementasikan Object Interface nya. 
 *
 *
 * Jadi Class Buah merupakan object inteface dari class Jeruk, etc.
 *
 */
interface Buah
{
    /* Method ini dipergunakan untuk mengambil warna buah */
    public function ambilWarna();
}
