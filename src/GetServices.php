<?php

namespace App\Ituran;

class GetServices extends SOAPService
{
    public $armored = null;
    public $cab = null;
    public $CNPJCPF = null;
    public $modelYear = null;
    public $modified = null;
    public $nmFipe = null;
    public $taxExemption = null;
    public $transpPassageiros = null;
    public $zipCode = null;

    public function __construct(
        $zipCode,
        $CNPJCPF,
        $nmFipe,
        $modelYear,
        $cab = 0,
        $armored = 0,
        $modified = 0,
        $taxExemption = 0,
        $transpPassageiros = 0
    ) {
        $this->zipCode = $zipCode;
        $this->CNPJCPF = $CNPJCPF;
        $this->nmFipe = $nmFipe;
        $this->modelYear = $modelYear;
        $this->cab = $cab;
        $this->armored = $armored;
        $this->modified = $modified;
        $this->taxExemption = $taxExemption;
        $this->transpPassageiros = $transpPassageiros;
    }

    public function get()
    {
        $response = $this->client->call('getServices', $this);
        return new GetServicesReturn($response->GetServicesResult);
    }
}
