<?php

use PHPUnit\Framework\TestCase;

use Turkpos\Soap;
use Turkpos\BuilderObject\TpIslemIptalIade;


class TpIslemIptalIadeTest extends TestCase
{


    function testMethod()
    {

        $soap = new Soap();

        $tpIslemIptalIade = new TpIslemIptalIade(1008929166, 1, 34555);


        $res = $soap->send($tpIslemIptalIade)->getResult();


        $this->assertIsInt(abs($res->TP_Islem_Iptal_IadeResult->Sonuc));
    }

}