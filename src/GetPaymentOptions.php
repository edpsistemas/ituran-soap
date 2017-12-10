<?php

namespace App\Ituran;

class GetPaymentOptions
{
    public $serviceValue = null;
    public $tipoCobranca = null;

    public function __construct($serviceValue, $tipoCobranca)
    {
        $this->serviceValue = $serviceValue;
        $this->tipoCobranca = $tipoCobranca;
    }
}
