<?php

namespace App\Ituran;

class GetPaymentOptions
{
    const OPTION_MONTHLY = 2;
    const OPTION_INSTALLATION = 5;

    public $serviceValue = null;
    public $tipoCobranca = null;

    public function __construct($serviceValue, $tipoCobranca)
    {
        $this->serviceValue = $serviceValue;
        $this->tipoCobranca = $tipoCobranca;
    }
}
