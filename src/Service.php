<?php

namespace App\Ituran;

class Service
{
    const FREQUENCY_SINGLE = 0;
    const FREQUENCY_MONTHLY = 1;
    const FREQUENCY_YEARLY = 12;

    public $serviceId = null;
    public $priceListId = null;
    public $monthlyFrequency = null;

    public function __construct($serviceId, $priceListId, $monthlyFrequency)
    {
        $this->serviceId = $serviceId;
        $this->priceListId = $priceListId;
        $this->monthlyFrequency = $monthlyFrequency;
    }
}
