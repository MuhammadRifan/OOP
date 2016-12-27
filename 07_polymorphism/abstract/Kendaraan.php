<?php

/*
 * Object Abstract merupakan podnsa 
 * 
 * Prinsip :
 * - Semua method pada Object Abstract.
 * - 1 Class pengguna interface dapat mengimplementasikan banyak Object 
 *   inteface
 * - Class pengguna interface menggunakan keyword 'implements' untuk
 *   mengimplementasikan Object Interface nya. 
 *
 * Jadi Class Kendaraan merupakan object inteface dari class Mobil, Motor etc.
 *
 */
abstract class Kendaraan
{
    public $platNomor;
    public $namaPemilik;

    public function ambilDetailKendaraan()
    {
        return 'Kendaraan dengan Plat Nomor : '.strtoupper($this->platNomor).
            ' dengan Nama Pemilik : '.ucwords($this->namaPemilik).PHP_EOL;
    }

    /* Method ini dipergunakan untuk mengambil warna buah */
    abstract public function nyalakanMesin();
}
