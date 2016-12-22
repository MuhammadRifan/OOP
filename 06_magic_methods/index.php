<?php

/**
 * 06 Magic Methods
 * Mempelajari beberapa magic method.
 */
require 'app/User.php';
require 'app/Validator.php';
require 'app/Helper.php';

// menentukan rules untuk validasi data
$rules = array('email' => 'required|email', 'password' => 'required|min:8');

// untuk testing validasi ganti value sesuai keinginan
$data = array('email' => 'budi@email.com', 'password' => '12345678');

$validator = new Validator();

// menjalankan validasi
if ($validator->validate($data, $rules) == true) {
    // ketika validasi terpenuhi
    $budi = new User($data);
    // dumping data object budi
    var_dump($budi);
} else {
    /*
     * ketika validasi salah / tidak terpenuhi akan menampilkan error dari method getErrors dari object $validator
     */
    var_dump($validator->getErrors());
}
