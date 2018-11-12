<?php

namespace Turkpos;


use SoapClient;
use Turkpos\BuilderObject\InterfaceSoapActionMethod;


class Soap
{

    private $soap, $result, $object;

    /***
     * Soap constructor.
     *
     */
    function __construct()
    {

        $this->soap = new SoapClient(Config::$SERVICE_URI);
    }


    /**
     * @param $object
     * @return $this
     *
     *
     */
    function send(InterfaceSoapActionMethod $object)
    {


        $this->object = $object;

        $array = (array)$object;

        $this->result = $this->soap->__soapCall($object->getSoapActionMethod(), $array);


        return $this;

    }


    /**
     * @return bool|mixed
     *
     */
    function getResult()
    {


        if (isset($this->result))
            return $this->result;


        return false;

    }


    /**
     * @return bool
     *
     *
     */
    function getSoapResultMethod()
    {

        $method = $this->object->getSoapActionMethod() . 'Result';

        if (isset($this->result))
            return $this->result->$method;


        return false;
    }
}