<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Wsdl2PhpGenerator\Config;

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new Config(array(
        'inputFile' => 'en.wsdl',
        'outputDir' => 'src/ElektronicznyNadawca',
        'namespaceName' => 'App\ElektronicznyNadawca'
    ))
);
