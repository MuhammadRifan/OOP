<?php

require 'User.php';

$budi = new User();
$budi->setPassword('12121221');

var_dump($budi->getPassword());
