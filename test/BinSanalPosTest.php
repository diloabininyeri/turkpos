<?php

use PHPUnit\Framework\TestCase;

use Turkpos\Soap;
use Turkpos\BuilderObject\BinSanalPos;
use Turkpos\Config;


class BinSanalPosTest extends TestCase
{

    function testMethod()
    {


        Config::$CLIENT_CODE = 10738;

        Config::$CLIENT_USERNAME = 'test';

        Config::$CLIENT_PASSWORD = 'test';

        Config::$SERVICE_URI = 'https://dmzws.ew.com.tr/turkpos.ws/service_turkpos_test.asmx?wsdl';




        $soap = new Soap();

        $binsanal = new BinSanalPos();

        $res = $soap->send($binsanal)->getSoapResultMethod();

        $sonuc=$res->Sonuc_Str;

        $this->assertEquals($sonuc, 'Başarılı');


    }

}