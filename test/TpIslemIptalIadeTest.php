<?php

use PHPUnit\Framework\TestCase;

use Turkpos\Soap;
use Turkpos\BuilderObject\TpIslemIptalIade;


class TpIslemIptalIadeTest extends TestCase
{


    function testMethod()
    {

        $soap = new Soap();

        $tpIslemIptalIade = new TpIslemIptalIade('0c13d406-873b-403b-9c09-a5766840d98c', 1, 34555);


        $res = $soap->send($tpIslemIptalIade)->getResult();


        $this->assertIsInt(abs($res->TP_Islem_Iptal_IadeResult->Sonuc));
    }

}