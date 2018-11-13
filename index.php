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


Config::$CLIENT_CODE = 10738;

Config::$CLIENT_USERNAME = 'test';

Config::$CLIENT_PASSWORD = 'test';

Config::$SERVICE_URI = 'https://dmzws.ew.com.tr/turkpos.ws/service_turkpos_test.asmx?wsdl';


function p($res)
{

    echo '<pre>';
    print_r($res);
}



/*



$tpOzenOranListele=new TpOzelOranListele('e20ce075-a373-4268-a8c0-dde87e69004a');



$soap=new Soap();


$client = new SoapClient("https://dmzws.ew.com.tr/turkpos.ws/service_turkpos_test.asmx?wsdl");
$spid = 1011;
$guid = '0c13d406-873b-403b-9c09-a5766840d98c';
$kkSahibi = "Albert Einstein";
$kkNo = "4444444444444444";
$kkSkAy = "04";
$kkSkYil = "2014";
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
$nesne = new TpIslemOdeme($spid, $guid, $kkSahibi, $kkNo, $kkSkAy, $kkSkYil, $kkCvc, $kkSahibiGsm,
    $hataUrl, $basariliUrl, $siparisId, $siparisAciklama, $taksit, $islemtutar, $toplamTutar, $islemid, $ipAdr, $odemeUrl,
    $dataBir, $dataIki, $dataUc, $dataDort, $dataBes);

$Islem_Guvenlik_Str = Config::$CLIENT_CODE . $guid . $spid . $taksit . $islemtutar . $toplamTutar . $siparisId . $hataUrl . $basariliUrl;


$nesneSha = new SHA2B64($Islem_Guvenlik_Str);


$Islem_Hash = $client->SHA2B64($nesneSha);


$nesne->Islem_Hash = $client->SHA2B64($nesneSha)->SHA2B64Result;


$res = $client->TP_Islem_Odeme($nesne);


echo "<pre>";


print_r($res);










