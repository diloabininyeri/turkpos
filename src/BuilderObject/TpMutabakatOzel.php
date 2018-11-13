<?php

namespace Turkpos\BuilderObject;


use Turkpos\Config;

class TpMutabakatOzel implements InterfaceSoapActionMethod
{
    /**
     * @var
     * @public
     */
    public $GUID, $Tarih_Bas, $Tarih_Bit, $G;
    /**
     * @var string
     *
     */


    private $soapAction = 'TP_Mutabakat_Ozet';

    /**
     * TpMutabakatOzel constructor.
     * @param $guid
     * @param $baslangic
     * @param $bitis
     *
     */

    public function __construct($guid, $baslangic, $bitis)
    {


        $this->GUID = $guid;
        $this->Tarih_Bas = $baslangic;
        $this->Tarih_Bit = $bitis;
        $this->G = new G(Config::$CLIENT_CODE, Config::$CLIENT_USERNAME, Config::$CLIENT_PASSWORD);


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
     *
     */
    public function setSoapActionMethod($soapAction): void
    {

        $this->soapAction = $soapAction;
    }

}