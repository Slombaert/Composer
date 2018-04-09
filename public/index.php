<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\WCS\Hello;
use HelloWorld\SayHello;
$hello = new Hello();
echo $hello->talk();
echo SayHello::world();