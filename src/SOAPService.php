<?php

namespace App\Ituran;

abstract class SOAPService
{
    protected $client;

    public function setClient(Ituran $client)
    {
        $this->client = $client;
    }
}
