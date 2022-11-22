<?php

use ProgrammerZamanNow\Belajar\Customer;

require_once __DIR__ . '/vendor/autoload.php';

$customer = new \ProgrammerZamanNow\Belajar\Customer("Wira");
echo $customer->sayHello("Budi"). PHP_EOL ;
