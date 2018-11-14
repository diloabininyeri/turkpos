<?php


include_once "vendor/autoload.php";


use Turkpos\Config;
use Turkpos\Soap;
use Turkpos\BuilderObject\BinSanalPos;
use Turkpos\BuilderObject\TpDekontIslem;
use Turkpos\BuilderObject\TpDekontIslemGonder;
use Turkpos\BuilderObject\TpIslemIptalIade;
use Turkpos\BuilderObject\TpIslemSorgulama;
use Turkpos\BuilderObject\TpIslemOdeme;
use Turkpos\BuilderObject\SHA2B64;
use Turkpos\BuilderObject\TpOzelOranListele;
use Turkpos\BuilderObject\TpMutabakatOzel;


Config::$CLIENT_CODE = 10738;

Config::$CLIENT_USERNAME = 'test';

Config::$CLIENT_PASSWORD = 'test';

Config::$SERVICE_URI = 'https://dmzws.ew.com.tr/turkpos.ws/service_turkpos_test.asmx?wsdl';


function p($res)
{

    echo '<pre>';
    print_r($res);
}


$bin = new BinSanalPos();
$soap = new Soap();
$res = $soap->send($bin)->getAnyData();


p($res);

