<?php

namespace Turkpos\BuilderObject;


class G
{

    /**
     * @var
     *
     */
    public  $CLIENT_CODE;


    /**
     * @var
     *
     */
    public $CLIENT_USERNAME;


    /**
     * @var
     *
     */
    public  $CLIENT_PASSWORD;





    /**
     * @param $clientCode
     * @param $clientUser
     * @param $clientPassword
     * @return $this
     *
     */
    function __construct($clientCode, $clientUser, $clientPassword)
    {


        $this->CLIENT_CODE = $clientCode;
        $this->CLIENT_USERNAME = $clientUser;
        $this->CLIENT_PASSWORD = $clientPassword;



        return $this;

    }


}