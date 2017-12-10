<?php

namespace App\Ituran;

class Phone
{
    const TYPE_COMMERCIAL = 1;
    const TYPE_RESIDENTIAL = 2;
    const TYPE_MOBILE = 3;
    const TYPE_FAX = 4;
    const TYPE_OTHER = 5;
    const TYPE_MESSAGE = 6;

    public $areaCode = null;
    public $ext = null;
    public $number = null;
    public $phoneType = null;

    public function __construct($phoneType, $areaCode, $number, $ext)
    {
        $this->phoneType = $phoneType;
        $this->areaCode = $areaCode;
        $this->number = $number;
        $this->ext = $ext;
    }
}
