<?php

class User
{
    private $email; // set properti email ke private
    private $password; // set properti password ke private

    /**
     * [__construct magic method constructor seperti magic method lainnya
     * diawali dengan 2 tanda 'underscore'
     * dijalankan setiap kali object dibuat dari class ini ].
     */
    public function __construct(array $params = array())
    {
        if (count($params)) {
            foreach ($params as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    /**
     * [__set dipanggil ketika kita mencoba set property yang tidak bisa diakses didalam sebuah object ].
     */
    public function __set($name, $value)
    {
        // cek jika properti ada / eksis, agar kita tidak asal memasukkan value
        if (isset($this->$name)) {
            $this->$name = $value;
        }
    }

    public function login()
    {
        return 'logging in ..';
    }

    public function logout()
    {
        return 'logging out ...';
    }

    /**
     * [setPassword set password user ].
     *
     * @param [type] $string [description]
     */
    public function setPassword($string)
    {
        $this->password = $string;
        // menambahkan return $this agar kita bisa menggunakan method chaining
        return $this;
    }

    /**
     * [getPassword digunakan untuk mengakses properti password dengan visibility private ].
     *
     * @return [type] [description]
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * [setEmail set email user].
     *
     * @param [type] $string [description]
     */
    public function setEmail($string)
    {
        $this->email = $string;
        // menambahkan return $this agar kita bisa menggunakan method chaining
        return $this;
    }

    /**
     * [getEmail digunakan untuk mengakses properti email dengan visibility private ].
     *
     * @return [type] [description]
     */
    public function getEmail()
    {
        return $this->email;
    }
}
