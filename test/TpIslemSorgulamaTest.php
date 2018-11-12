<?php

use PHPUnit\Framework\TestCase;

use Turkpos\BuilderObject\TpIslemSorgulama;
use Turkpos\Soap;
use Turkpos\Config;

class TpIslemSorgulamaTest extends TestCase
{



    function testMethod()
    {
        $this->setConfigs();

        $soap = new Soap();
        $tpIslemSorgulama = new TpIslemSorgulama('2b8185be-21fc-474b-936e-cfed32f412c3', 3445, 45, 5);

        $res = $soap->send($tpIslemSorgulama)->getSoapResultMethod();

        $this->assertIsInt(abs($res->Sonuc));


    }


    /**
     *
     * set configs
     */
    private function setConfigs()
    {

        Config::$CLIENT_CODE = 10738;

        Config::$CLIENT_USERNAME = 'test';

        Config::$CLIENT_PASSWORD = 'test';

        Config::$SERVICE_URI = 'https://dmzws.ew.com.tr/turkpos.ws/service_turkpos_test.asmx?wsdl';
    }
}