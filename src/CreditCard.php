<?php

namespace App\Ituran;

class CreditCard
{
    public $aquirer = null;
    public $name = null;
    public $number = null;
    public $expirationMonth = null;
    public $expirationYear = null;
    public $amountParcels = null;
    public $securityCode = null;

    public function __construct(
        $aquirer,
        $name,
        $number,
        $expirationMonth,
        $expirationYear,
        $amountParcels,
        $securityCode
    ) {
        $this->aquirer = $aquirer;
        $this->name = $name;
        $this->number = $number;
        $this->expirationMonth = $expirationMonth;
        $this->expirationYear = $expirationYear;
        $this->amountParcels = $amountParcels;
        $this->securityCode = $securityCode;
    }
}
