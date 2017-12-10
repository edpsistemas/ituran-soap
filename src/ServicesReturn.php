<?php

namespace App\Ituran;

class ServicesReturn
{
    public $installationAmount = null;
    public $installationFeeHome = null;
    public $insuranceCompany = null;
    public $monthlyFrequency = null;
    public $priceListId = null;
    public $serviceAmount = null;
    public $serviceDescription = null;
    public $serviceId = null;
    public $serviceTitle = null;
    public $typeService = null;
    public $uninstallationAmount = null;

    public function __construct($servicesReturn)
    {
        $this->serviceId = $servicesReturn->serviceId;
        $this->priceListId = $servicesReturn->priceListId;
        $this->serviceTitle = $servicesReturn->serviceTitle;
        $this->serviceDescription = $servicesReturn->serviceDescription;
        $this->monthlyFrequency = $servicesReturn->monthlyFrequency;
        $this->serviceAmount = $servicesReturn->serviceAmount;
        $this->installationAmount = $servicesReturn->installationAmount;
        $this->uninstallationAmount = $servicesReturn->uninstallationAmount;
        $this->installationFeeHome = $servicesReturn->installationFeeHome;
        $this->insuranceCompany = $servicesReturn->insuranceCompany;
        $this->typeService = $servicesReturn->typeService;
    }
}
