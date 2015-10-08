<?php

require 'User.php';

$budi = new User();
$budi->email = 'budi@gmail.com';
$budi->password = 'eqwjqiAOd121';

$jono = new User();
$jono->email = 'jono@gmail.com';
$jono->password = 'qeqjAOJq12';

var_dump($budi->login());
