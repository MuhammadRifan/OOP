<?php

class Handphone
{
    public static $jenisHandphone = 'nokia';

    public static function cetakJenisHandphone()
    {
        return 'Jenis HP : '.self::$jenisHandphone;
    }
}
