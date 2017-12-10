<?php

namespace App\Ituran;

class GetServicesReturn
{
    public $modelo = null;
    public $returnCode = null;
    public $returnMessage = null;
    public $services = null;

    public function __construct($getServicesResult)
    {
        $this->returnCode = $getServicesResult->returnCode;
        $this->returnMessage = $getServicesResult->returnMessage;
        $this->modelo = $getServicesResult->modelo;

        $this->services = [];
        foreach ($getServicesResult->services->ServicesReturn as $key => $value) {
            $this->services[] = new ServicesReturn($value);
        }
    }
}
