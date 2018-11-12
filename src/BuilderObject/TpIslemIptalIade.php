<?php


namespace Turkpos\BuilderObject;


class TpIslemIptalIade implements InterfaceSoapActionMethod
{

    /**
     * @var
     *
     *
     */
    public $GUID,
        $Durum,
        $Dekont_ID;


    /**
     * @var string
     *
     */
    private $soapAction = 'TP_Islem_Iptal_Iade';


    public function __construct($guid, $durum, $dekontId)
    {

        $this->GUID = $guid;
        $this->Durum = $durum;
        $this->Dekont_ID = $dekontId;
        $this->G = new G(10738, "test", "test");
    }


    /**
     * @return string
     *
     */
    public function getSoapActionMethod(): string
    {
        return $this->soapAction;
    }


    /**
     * @param $soapAction
     *
     */
    public function setSoapActionMethod($soapAction): void
    {

        $this->soapAction = $soapAction;
    }

}