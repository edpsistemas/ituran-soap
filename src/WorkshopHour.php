<?php

namespace App\Ituran;

class WorkshopHour
{
    public $periodNumber = null;
    public $periodDescription = null;
    public $available = null;

    public function __construct($periodNumber, $periodDescription, $available)
    {
        $this->periodNumber = $periodNumber;
        $this->periodDescription = $periodDescription;
        $this->available = $available;
    }
}
