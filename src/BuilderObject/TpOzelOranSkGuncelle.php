<?php

namespace Turkpos\BuilderObject;


use Turkpos\Config;

class TpOzelOranSkGuncelle implements InterfaceSoapActionMethod
{

    /**
     * @var
     *
     */
    public $GUID,
            $G,
            $Ozel_Oran_SK_ID,
            $MO_1,
            $MO_2,
            $MO_3,
            $MO_4,
            $MO_5,
            $MO_6,
            $MO_7,
            $MO_8,
            $MO_9,
            $MO_10,
            $MO_11,
            $MO_12;


    /**
     * @var string
     *
     */
    private $soapAction = 'TP_Ozel_Oran_SK_Guncelle';

    public function __construct(string $guid, $ozelOranSkId, $mo1, $mo2, $mo3, $mo4, $mo5, $mo6, $mo7, $mo8, $mo9, $mo10, $mo11, $mo12)
    {

        $this->GUID = $guid;
        $this->Ozel_Oran_SK_ID = $ozelOranSkId;
        $this->MO_1 = $mo1;
        $this->MO_2 = $mo2;
        $this->MO_3 = $mo3;
        $this->MO_4 = $mo4;
        $this->MO_5 = $mo5;
        $this->MO_6 = $mo6;
        $this->MO_7 = $mo7;
        $this->MO_8 = $mo8;
        $this->MO_9 = $mo9;
        $this->MO_10 = $mo10;
        $this->MO_11 = $mo11;
        $this->MO_12 = $mo12;
        $this->G = new G(Config::$CLIENT_CODE, Config::$CLIENT_USERNAME, Config::$CLIENT_PASSWORD);

        return $this;
    }


    /**
     * @return string
     *
     *
     */
    public function getSoapActionMethod(): string
    {
        return $this->soapAction;
    }


    /**
     * @param $soapAction
     *
     * @void
     */
    public function setSoapActionMethod($soapAction): void
    {

        $this->soapAction = $soapAction;
    }
}