<?php

namespace App\Ituran;

class Address
{
    const TYPE_RESIDENTIAL = 1;
    const TYPE_COMMERCIAL = 2;
    const TYPE_BILLING = 3;
    const TYPE_DELIVERY = 4;
    const TYPE_INSTALLATION = 5;
    const TYPE_MAILING = 6;
    const TYPE_SHIPPING = 8;

    public $addressType = null;
    public $complement = null;
    public $dsAddress = null;
    public $dsDistrict = null;
    public $dsUF = null;
    public $flCobranca = null;
    public $flFaturamento = null;
    public $nmCity = null;
    public $number = null;
    public $zipCode = null;

    public function __construct(
        $addressType,
        $zipCode,
        $number,
        $complement,
        $dsAddress,
        $dsDistrict,
        $dsUF,
        $nmCity,
        $flFaturamento,
        $flCobranca
    ) {
        $this->addressType = $addressType;
        $this->zipCode = $zipCode;
        $this->number = $number;
        $this->complement = $complement;
        $this->dsAddress = $dsAddress;
        $this->dsDistrict = $dsDistrict;
        $this->dsUF = $dsUF;
        $this->nmCity = $nmCity;
        $this->flFaturamento = $flFaturamento;
        $this->flCobranca = $flCobranca;
    }
}
