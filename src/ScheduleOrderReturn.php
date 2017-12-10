<?php

namespace App\Ituran;

class ScheduleOrderReturn
{
    public $returnCode = null;
    public $returnMessage = null;

    public function __construct($returnCode, $returnMessage)
    {
        $this->returnCode = $returnCode;
        $this->returnMessage = $returnMessage;
    }
}
