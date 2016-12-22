<?php

class User
{
    private $email; // set properti email ke private
    private $password; // set properti password ke private
    // const MINCHARS = 8; // hapus baris ini

    public function login()
    {
        return 'logging in ..';
    }

    public function logout()
    {
        return 'logging out ...';
    }

    public function setPassword($string)
    {
        /*
         * code ini kita hapus karena kita sudah membuat Class Validator tersendiri , sengaja disini di komen agar tahu perbedaanya
         */
        // if($this->validatePassword($string) == false){
        //     throw new Exception("Minimal karakter password adalah " . self::MINCHARS);
        // }

        // $this digunakan untuk mereferensi properti atau method dalam class itu sendiri
        // $this->password = hash('sha256', $string);
        $this->password = $string;
        // menambahkan return $this agar kita bisa menggunakan method chaining
        return $this;
    }

    // method ini digunakan untuk mengakses properti password yang visibilitynya private
    public function getPassword()
    {
        return $this->password;
    }

    public function setEmail($string)
    {
        /*
         * code ini kita hapus karena kita sudah membuat Class Validator tersendiri , sengaja disini di komen agar tahu perbedaanya
         */
        // if(! filter_var($string, FILTER_VALIDATE_EMAIL)){
        //     throw new Exception("Gunakan email yang valid");
        // }

        $this->email = $string;
        // menambahkan return $this agar kita bisa menggunakan method chaining
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    /*
     * [validatePassword description]
     * code ini kita hapus karena kita sudah membuat Class Validator tersendiri , sengaja disini di komen agar tahu perbedaanya
     * @param  [type] $string [description]
     * @return [type]         [description]
     */
    // private function validatePassword($string)
    // {
    //     return strlen($string) < self::MINCHARS ? false : true;
    // }
}
