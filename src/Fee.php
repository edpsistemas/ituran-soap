<?php

namespace App\Ituran;

use DateTime;

class Fee
{
    public $paymentOptionId = null;
    public $creditCard = null;
    public $directDebit = null;
    public $installmentQuantity = null;
    public $dueDate = null;

    public function __construct(
        $paymentOptionId,
        $creditCard,
        $directDebit,
        $installmentQuantity,
        DateTime $dueDate
    ) {
        $this->paymentOptionId = $paymentOptionId;
        $this->creditCard = $creditCard;
        $this->directDebit = $directDebit;
        $this->installmentQuantity = $installmentQuantity;
        $this->dueDate = $dueDate->format('Y-m-d\TH:i:s');
    }
}
