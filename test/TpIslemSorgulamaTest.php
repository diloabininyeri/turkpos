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
        $tpIslemSorgulama = new TpIslemSorgulama('0c13d406-873b-403b-9c09-a5766840d98c', 3445, 45, 5);

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