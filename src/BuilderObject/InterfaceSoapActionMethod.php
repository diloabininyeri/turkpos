<?php

namespace Turkpos\BuilderObject;

/**
 * Interface InterfaceSoapActionMethod
 * @package Turkpos\BuilderObject
 * @var $soapAction
 */

interface InterfaceSoapActionMethod
{


    /**
     * @return mixed|string
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