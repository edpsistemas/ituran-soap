<?php

namespace App\Ituran;

class DirectDebit
{
    public $codeBank = null;
    public $agency = null;
    public $account = null;
    public $digit = null;

    public function __construct($codeBank, $agency, $account, $digit)
    {
        $this->codeBank = $codeBank;
        $this->agency = $agency;
        $this->account = $account;
        $this->digit = $digit;
    }
}
