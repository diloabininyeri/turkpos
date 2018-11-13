<?php

use PHPUnit\Framework\TestCase;
use Turkpos\BuilderObject\TpMutabakatOzel;
use Turkpos\Config;
use Turkpos\Soap;

class TpMutabakatOzelTest extends TestCase
{


    function testMethod()
    {


        $tpMutabakatOzel = new TpMutabakatOzel('0c13d406-873b-403b-9c09-a5766840d98c', '2018-11-12', '2018-11-15');
        $soap = new Soap();
        $res = $soap->send($tpMutabakatOzel)->getSoapResultMethod();

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