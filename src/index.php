<?php


include_once "../vendor/autoload.php";


use Turkpos\Config;
use Turkpos\Soap;
use Turkpos\BuilderObject\BinSanalPos;
use Turkpos\BuilderObject\TpDekontIslem;
use Turkpos\BuilderObject\TpDekontIslemGonder;
use Turkpos\BuilderObject\TpIslemIptalIade;


Config::$CLIENT_CODE = 10738;

Config::$CLIENT_USERNAME = 'test';

Config::$CLIENT_PASSWORD = 'test';

Config::$SERVICE_URI = 'https://dmzws.ew.com.tr/turkpos.ws/service_turkpos_test.asmx?wsdl';


$soap = new Soap();


$tpIslemIptalIade = new TpIslemIptalIade(1008929166, 1, 34555);


$res = $soap->send($tpIslemIptalIade)->getSoapResultMethod();


echo "<pre>";


print_r($res);










