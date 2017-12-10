<?php

namespace App\Ituran;

class Order
{
    public $consumer = null;
    public $platform = null;
    public $contacts = [];
    public $services = [];
    public $servicesFee = null;
    public $installationFee = null;
    public $installationFeeHome = '';
    public $sellerDocument = null;

    public function __construct(
        Consumer $consumer,
        Platform $platform,
        Fee $servicesFee,
        Fee $installationFee,
        $sellerDocument = null
    ) {
        $this->consumer = $consumer;
        $this->platform = $platform;
        $this->servicesFee = $servicesFee;
        $this->installationFee = $installationFee;
        $this->sellerDocument = $sellerDocument;
    }

    public function addContact(Contact $contact)
    {
        $this->contacts[] = $contact;
    }

    public function addService(Service $service)
    {
        $this->services[] = $service;
    }
}
