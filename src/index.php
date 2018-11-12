<?php


include_once "../vendor/autoload.php";


use Turkpos\Config;
use Turkpos\Soap;
use Turkpos\BuilderObject\BinSanalPos;
use Turkpos\BuilderObject\TpDekontIslem;
use Turkpos\BuilderObject\TpDekontIslemGonder;
use Turkpos\BuilderObject\TpIslemIptalIade;
use Turkpos\BuilderObject\TpIslemSorgulama;
use Turkpos\BuilderObject\TpIslemOdeme;


Config::$CLIENT_CODE = 10738;

Config::$CLIENT_USERNAME = 'test';

Config::$CLIENT_PASSWORD = 'test';

Config::$SERVICE_URI = 'https://dmzws.ew.com.tr/turkpos.ws/service_turkpos_test.asmx?wsdl';


$soap = new Soap();



$spid = 1011;
$guid = '34827276-e92c-4bf9-b290-1f373f04d9e5';
$kkSahibi = "Albert Einstein";
$kkNo = "4444444444444444";
$kkSkAy = "04";
$kkSkYil = "2020";
$kkCvc = "444";
$kkSahibiGsm = "5360331719";
$hataUrl = "https://url";
$basariliUrl = "https://url";
$siparisId = "7";
$odemeUrl = "http://localhost:8080/turkpos-api/oran.php";
$siparisAciklama = "siparis aciklama";
$taksit = 1;
$islemtutar = "100,00";
$toplamTutar = "101,75";
$islemid = "";
$ipAdr = "127.0.0.1";
$dataBir = " ";
$dataIki = " ";
$dataUc = " ";
$dataDort = " ";
$dataBes = " ";
$refUrl="";
$tpIslemOdeme=new TpIslemOdeme($spid,$guid,$kkSahibi,$kkNo,$kkSkAy,$kkSkYil,$kkCvc,$kkSahibiGsm,$hataUrl,$basariliUrl,$siparisId,$siparisAciklama,$taksit,$islemtutar,$toplamTutar,$islemid,$ipAdr,$refUrl,$dataBir,$dataIki,$dataUc,$dataDort,$dataBes);



$res = $soap->send($tpIslemOdeme)->getSoapResultMethod();


echo "<pre>";


print_r($res);










