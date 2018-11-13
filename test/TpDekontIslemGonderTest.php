<?php

use PHPUnit\Framework\TestCase;
use Turkpos\Config;
use Turkpos\Soap;
use Turkpos\BuilderObject\TpDekontIslemGonder;


class TpDekontIslemGonderTest extends TestCase
{


    /**
     *
     *
     */
    function testMethod()
    {

        $this->setConfigs();
        $soap = new Soap();
        $tpDekontIslemGonder = new TpDekontIslemGonder(1008929166, 34444, "huseyin.ssari@gmail.com");
        $res = $soap->send($tpDekontIslemGonder)->getSoapResultMethod();



        $this->assertEquals($res->Sonuc, -1);


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