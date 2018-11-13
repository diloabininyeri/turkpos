<?php

namespace Turkpos\BuilderObject;


use Turkpos\Config;

class TpOzelOranListele implements InterfaceSoapActionMethod
{


    /**
     * @var
     *
     */
    public $GUID, $G;
    /**
     * @var string
     *
     */
    private $soapAction = 'TP_Ozel_Oran_Liste';

    /**
     * TpOzelOranListele constructor.
     * @param $guid
     *
     */
    public function __construct($guid)
    {
        $this->GUID = $guid;
        $this->G = new G(Config::$CLIENT_CODE, Config::$CLIENT_USERNAME, Config::$CLIENT_PASSWORD);

        return $this;

    }

    /**
     * @return string
     */
    public function getSoapActionMethod(): string
    {
        return $this->soapAction;
    }


    /**
     * @param $soapAction
     */
    public function setSoapActionMethod($soapAction): void
    {
        $this->soapAction = $soapAction;
    }

}