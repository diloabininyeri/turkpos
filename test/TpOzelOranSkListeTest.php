<?php

use PHPUnit\Framework\TestCase;

use Turkpos\Soap;
use Turkpos\BuilderObject\TpOzelOranSkListe;
use Turkpos\Config;


class TpOzelOranSkListeTest extends TestCase
{


    function testMethod()
    {

        $this->setConfigs();


        $tpOzelOranSkListe = new TpOzelOranSkListe('0c13d406-873b-403b-9c09-a5766840d98c');

        $soap = new Soap();

        $res = $soap->send($tpOzelOranSkListe)->getSoapResultMethod();


        $this->assertEquals($res->Sonuc_Str, "Başarılı");


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