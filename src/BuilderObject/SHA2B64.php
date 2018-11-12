<?php

namespace Turkpos\BuilderObject;


use Turkpos\Config;


class SHA2B64
{


    /**
     * @var
     *
     */
    public $Data, $G;

    /**
     * SHA2B64 constructor.
     * @param $metin
     *
     *
     */
    public function __construct($metin)
    {

        $this->Data = $metin;
        $this->G = new G(Config::$CLIENT_CODE, Config::$CLIENT_USERNAME, Config::$CLIENT_PASSWORD);


        return $this;

    }

}