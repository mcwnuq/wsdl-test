<?php

declare(strict_types=1);

namespace App;

require __DIR__ . '/../vendor/autoload.php';

use App\ElektronicznyNadawca\ClassMap;
use App\ElektronicznyNadawca\StructType\AddShipment;
use App\ElektronicznyNadawca\StructType\AdresType;
use App\ElektronicznyNadawca\StructType\EPOExtendedType;
use App\ElektronicznyNadawca\StructType\Pocztex2021KurierType;
use App\ElektronicznyNadawca\StructType\ZawartoscPocztex2021Type;
use SoapClient;

class Test
{
    public function test()
    {
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

        $wsdl = 'https://en-testwebapi.poczta-polska.pl/websrv/en.wsdl';
        $options = [
            'location' => 'https://en-testwebapi.poczta-polska.pl/websrv/en.php',
            'classmap' => ClassMap::get(),
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS | SOAP_USE_XSI_ARRAY_TYPE,
        ];

        $client = new SoapClient($wsdl, $options);
        try {
            $client->__soapCall('addShipment', [$addShipment]);
        } catch (\SoapFault $e) {
            var_dump($e->getTrace()[0]['args'][0]);
        }
//        var_dump($client->__getLastRequest());
    }
}

(new Test())->test();