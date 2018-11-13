<?php


namespace Turkpos\BuilderObject;


use Turkpos\Config;

class TpDekontIslem implements InterfaceSoapActionMethod
{

    /**
     * @var string
     *
     *
     */
    private $soapAction = 'TP_Dekont_Islem';


    /**
     * @var string
     */
    public $Dekont_ID, $E_Posta, $IP_Adr, $G;


    /**
     * TpDekontIslem constructor.
     * @param string $dekontId
     * @param string $ePosta
     * @param $ipAddr
     *
     */
    public function __construct(string $dekontId, string $ePosta, $ipAddr)
    {

        $this->Dekont_ID = $dekontId;
        $this->E_Posta = $ePosta;
        $this->IP_Adr = $ipAddr;
        $this->G = new G(Config::$CLIENT_CODE, Config::$CLIENT_USERNAME, Config::$CLIENT_PASSWORD);


        return $this;
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


    /**
     * @return string
     *
     */
    public function getSoapActionMethod(): string
    {
        return $this->soapAction;
    }
}