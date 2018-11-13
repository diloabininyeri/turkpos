<?php

namespace Turkpos\BuilderObject;


use Turkpos\Config;

class TpOzelOranSkListe implements InterfaceSoapActionMethod
{

    /**
     * @var
     *
     *
     */
    public $GUID, $G;
    /**
     * @var string
     * soapAction
     */
    private $soapAction = 'TP_Ozel_Oran_SK_Liste';


    /**
     * TpOzelOranSkListe constructor.
     * @param string $guid
     *
     */
    public function __construct(string $guid)
    {

        $this->GUID = $guid;
        $this->G = new G(Config::$CLIENT_CODE, Config::$CLIENT_USERNAME, Config::$CLIENT_PASSWORD);
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
     *
     */
    public function setSoapActionMethod($soapAction): void
    {

        $this->soapAction = $soapAction;
    }

}