<?php
/** @noinspection PhpComposerExtensionStubsInspection */

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

        $this->result = $this->soap->__soapCall($object->getSoapActionMethod(), array($array));


        return $this;

    }


    /**
     * @return bool|mixed
     *
     */
    function getResult(): ?array
    {


        if (isset($this->result))
            return (array)$this->result;


        return false;

    }


    /**
     * @return array|false
     *
     *
     */
    function getSoapResultMethod(): ?array
    {


        /** @noinspection PhpUndefinedMethodInspection */
        $method = $this->object->getSoapActionMethod() . 'Result';

        if (isset($this->result))
            return (array)$this->result->$method;


        return false;
    }

    /**
     * @return array|bool
     *
     */
    function getAnyData()
    {

        /** @noinspection PhpUndefinedMethodInspection */
        $method = $this->object->getSoapActionMethod() . 'Result';

        if ($this->getSonuc() == 1) {
            $response = $this->result->$method->DT_Bilgi->any;

            $xmlString = "<?xml version='1.0' standalone='yes'?><root>$response</root>";

            $xml = str_replace(array("diffgr:", "msdata:"), '', $xmlString);
            $data = simplexml_load_string($xml);
            $result = $data->diffgram->NewDataSet;

            return (array)$result;


        }


        return $this->getSonucStr();


    }

    /**
     * @return bool
     *
     */

    function getSonuc()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $method = $this->object->getSoapActionMethod() . 'Result';

        if (isset($this->result))
            return $this->result->$method->Sonuc;


        return false;

    }

    /**
     * @return bool
     *
     */
    function getSonucStr()
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $method = $this->object->getSoapActionMethod() . 'Result';

        if (isset($this->result))
            return $this->result->$method->Sonuc_Str;


        return false;

    }


}