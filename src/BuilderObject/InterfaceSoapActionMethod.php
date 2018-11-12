<?php

namespace Turkpos\BuilderObject;


interface InterfaceSoapActionMethod
{




    /**
     * @return string
     *
     */
    public function getSoapActionMethod():string ;


    /**
     * @param $soapAction
     *
     * optiminial set soapcallmethod
     *
     */
    public function setSoapActionMethod($soapAction): void;
}