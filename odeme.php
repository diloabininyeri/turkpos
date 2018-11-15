<?php
/**
 * Created by PhpStorm.
 * User: nkolayofis
 * Date: 14.11.2018
 * Time: 12:43
 */

include_once "vendor/autoload.php";


use Turkpos\Config;
use Turkpos\Soap;

use Turkpos\BuilderObject\Odeme;

Config::$CLIENT_CODE = 10738;

Config::$CLIENT_USERNAME = 'test';

Config::$CLIENT_PASSWORD = 'test';

Config::$SERVICE_URI = 'https://dmzws.ew.com.tr/turkpos.ws/service_turkpos_test.asmx?wsdl';


$soap = new Soap();


$client = new SoapClient("https://dmzws.ew.com.tr/turkpos.ws/service_turkpos_test.asmx?wsdl");
$spid = 1011;
$guid = '0c13d406-873b-403b-9c09-a5766840d98c';
$kkSahibi = "Albert Einstein";
$kkNo = "4444444444444444";
$kkSkAy = "04";
$kkSkYil = "2020";
$kkCvc = "444";
$kkSahibiGsm = "5340882563";
$hataUrl = "http://localhost:1234/unsuccesfull.php";
$basariliUrl = "http://localhost:1234/succesfull.php";
$siparisId = "7";
$odemeUrl = "http://localhost:1234/odeme.php";
$siparisAciklama = "siparis aciklama";
$taksit = 1;
$islemtutar = "100,00";
$toplamTutar = "102,45";
$islemid = "";
$ipAdr = "127.0.0.1";
$dataBir = " ";
$dataIki = " ";
$dataUc = " ";
$dataDort = " ";
$dataBes = " ";


$soap = new Soap();


$nesne = new Odeme($spid, $guid, $kkSahibi, $kkNo, $kkSkAy, $kkSkYil, $kkCvc, $kkSahibiGsm,
    $hataUrl, $basariliUrl, $siparisId, $siparisAciklama, $taksit, $islemtutar, $toplamTutar, $islemid, $ipAdr, $odemeUrl,
    $dataBir, $dataIki, $dataUc, $dataDort, $dataBes);


$res = $soap->send($nesne)->getSoapResultMethod();


echo "<pre>";


print_r($res);










