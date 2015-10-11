<?php

require 'app/User.php';
require 'app/Validator.php';
require 'app/Helper.php';

// menentukan rules untuk validasi
$rules = array('email' => 'required|email', 'password' => 'required|min:8');

// untuk testing validasi ganti value sesuai keinginan
$data = array('email' => 'jsa@email.com', 'password' => 'dasa');

$validator = new Validator();

if($validator->validate($data, $rules) === true){
    // ketika validasi terpenuhi
    var_dump('passed');
}
else{
    /**
     * ketika validasi salah / tidak terpenuhi akan menampilkan error dari method getErrors dari object $validator
     */
    var_dump($validator->getErrors());
}