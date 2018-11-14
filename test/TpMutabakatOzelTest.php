<?php

use PHPUnit\Framework\TestCase;
use Turkpos\BuilderObject\TpMutabakatOzel;
use Turkpos\Config;
use Turkpos\Soap;

class TpMutabakatOzelTest extends TestCase
{


    function testMethod()
    {


        $tpMutabakatOzel = new TpMutabakatOzel('0c13d406-873b-403b-9c09-a5766840d98c', '20.11.2015 00:00:00', '20.11.2015 15:15:00');
        $soap = new Soap();
        $res = $soap->send($tpMutabakatOzel)->getSoapResultMethod();



        print_r($res);
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