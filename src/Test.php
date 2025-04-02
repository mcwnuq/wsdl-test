<?php

declare(strict_types=1);

namespace App;

require __DIR__ . '/../vendor/autoload.php';

use App\ElektronicznyNadawca\ClassMap;
use App\ElektronicznyNadawca\ServiceType\Service;
use App\ElektronicznyNadawca\StructType\AddShipment;
use App\ElektronicznyNadawca\StructType\AdresType;
use App\ElektronicznyNadawca\StructType\EPOExtendedType;
use App\ElektronicznyNadawca\StructType\Pocztex2021KurierType;
use App\ElektronicznyNadawca\StructType\ZawartoscPocztex2021Type;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class Test
{
    public function test()
    {
        $options = [
            AbstractSoapClientBase::WSDL_URL => 'https://en-testwebapi.poczta-polska.pl/websrv/en.wsdl',
            AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
            AbstractSoapClientBase::WSDL_LOCATION => 'https://en-testwebapi.poczta-polska.pl/websrv/en.php',
        ];

        $service = new Service($options);

        $addShipment = new AddShipment(
            [
                (new Pocztex2021KurierType())
                    ->setGuid('DEB4B64EB735BCFBD19CC49B2F146E94')
                ->setOpis('21/37')
                ->setAdres(
                    new AdresType(
                        'Jan Stefan',
                        'Niezbędny-Zbędny-Bezużyteczny',
                        'Piekielna',
                        '666',
                        '666',
                        'Gdynia',
                        '81193',
                        'Polska',
                        '',
                        '',
                        null,
                        null,
                        null
                    )
                )
                ->setMasa(5000)
                ->setWartosc(100)
                ->setFormat('S')
                ->setEpo(
                    new EPOExtendedType(
                        'ADMINISTRACYJNA'
                    )
                )
                ->setZawartosc(
                    new ZawartoscPocztex2021Type(
                        null,
                        'Dokumenty'
                    )
                )
                ->setUiszczaOplate('NADAWCA')
            ],
            1234
        );

        $service->addShipment($addShipment);
        var_dump($service->getLastRequest());
    }
}

(new Test())->test();