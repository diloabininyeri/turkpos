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


use Turkpos\BuilderObject\TpOzelOranSkListe;


Config::$CLIENT_CODE = 10738;

Config::$CLIENT_USERNAME = 'test';

Config::$CLIENT_PASSWORD = 'test';

Config::$SERVICE_URI = 'https://dmzws.ew.com.tr/turkpos.ws/service_turkpos_test.asmx?wsdl';


function p($res)
{

    echo '<pre>';
    print_r($res);
}

$soap = new Soap();
$tpIslemSorgulama = new TpIslemSorgulama('0c13d406-873b-403b-9c09-a5766840d98c', 3445, 45, 5);

$res = $soap->send($tpIslemSorgulama)->getAnyData();

echo arrayToJson($res);



