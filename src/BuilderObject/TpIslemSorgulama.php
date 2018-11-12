<?php


namespace Turkpos\BuilderObject;


use Turkpos\Config;

class TpIslemSorgulama implements InterfaceSoapActionMethod
{

    /**
     * @var
     *
     *
     */
    public $GUID,
        $Dekont_ID,
        $Siparis_ID,
        $Islem_ID;


    /**
     * @var string
     */
    private $soapAction = 'TP_Islem_Sorgulama';


    /**
     * TpIslemSorgulama constructor.
     * @param $guid
     * @param $dekontId
     * @param $siparisId
     *
     *
     */
    public function __construct($guid, $dekontId, $siparisId, $islemId)
    {

        $this->GUID = $guid;
        $this->Dekont_ID = $dekontId;
        $this->Siparis_ID = $siparisId;
        $this->Islem_ID = $islemId;
        $this->G = new G(Config::$CLIENT_CODE, Config::$CLIENT_USERNAME, Config::$CLIENT_PASSWORD);
    }


    /**
     * @param $soapAction
     *
     */
    public function setSoapActionMethod($soapAction): void
    {

        $this->soapAction = $soapAction;
    }


    /**
     * @return string
     *
     */
    public function getSoapActionMethod(): string
    {
        return $this->soapAction;
    }
}