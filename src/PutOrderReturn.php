<?php

namespace App\Ituran;

use StdClass;

class PutOrderReturn
{
    public $orderId = null;
    public $installationPayment = null;
    public $returnCode = null;
    public $returnMessage = null;
    public $platformStatus = null;

    public function __construct(StdClass $return)
    {
        $this->returnCode = $return->returnCode;
        $this->returnMessage = $return->returnMessage;
        if ($return->returnCode == 0) {
            $this->orderId = $return->orderId;
            $this->installationPayment = $return->installationPayment;
        }
    }
}
