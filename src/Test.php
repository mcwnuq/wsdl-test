<?php

declare(strict_types=1);

namespace App;

require __DIR__ . '/../vendor/autoload.php';

use App\ElektronicznyNadawca\ElektronicznyNadawca;
use App\ElektronicznyNadawca\addShipment;
use App\ElektronicznyNadawca\adresType;
use App\ElektronicznyNadawca\EPOExtendedType;
use App\ElektronicznyNadawca\pocztex2021KurierType;
use App\ElektronicznyNadawca\zawartoscPocztex2021Type;
use SoapFault;

class Test
{
    public function test()
    {
        $options = [
            'url' => 'https://en-testwebapi.poczta-polska.pl/websrv/en.wsdl',
            'location' => 'https://en-testwebapi.poczta-polska.pl/websrv/en.php',
            'login' => 'test',
            'password' => 'test',
        ];

        $service = new ElektronicznyNadawca($options);

        $przesylka = new Pocztex2021KurierType(
            'DEB4B64EB735BCFBD19CC49B2F146E94',
            null,
            null,
            '21/37',
            null,
            null,
            null,
            null,
            null,
            false
        );

        $adres = new adresType(
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
        );

        $przesylka
            ->setAdres($adres)
            ->setMasa(5000)
            ->setWartosc(100)
            ->setFormat('S')
            ->setEpo(
                new EPOExtendedType(
                    'ADMINISTRACYJNA'
                )
            )
            ->setZawartosc(
                new zawartoscPocztex2021Type(
                    null,
                    'Dokumenty'
                )
            )
            ->setUiszczaOplate('NADAWCA');

        $addShipment = new AddShipment(
            $przesylka,
            1234
        );

        try {
            $service->addShipment($addShipment);
        } catch (SoapFault $fault) {
            echo $fault->getTrace()[0]['args'][0];
        }
    }
}

(new Test())->test();