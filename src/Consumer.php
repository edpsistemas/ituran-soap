<?php

namespace App\Ituran;

use DateTime;

class Consumer
{
    const TYPE_PERSON = 2;
    const TYPE_COMPANY = 1;

    const GENDER_MALE = 'M';
    const GENDER_FEMALE = 'F';

    public $personType = null;
    public $fullName = null;
    public $nickName = null;
    public $birth = null;
    public $gender = null;
    public $CNPJ_CPF = null;
    public $IE_RG = null;
    public $email = null;
    public $INSC_MUN = null;

    public $Address = [];
    public $Phones = [];

    public function __construct(
        $personType,
        $fullName,
        $nickName,
        DateTime $birth,
        $gender,
        $CNPJ_CPF,
        $IE_RG,
        $INSC_MUN,
        $email
    ) {
        $this->personType = $personType;
        $this->fullName = $fullName;
        $this->nickName = $nickName;
        $this->birth = $birth->format('Y-m-d\TH:i:s');
        $this->gender = $gender;
        $this->CNPJ_CPF = $CNPJ_CPF;
        $this->IE_RG = $IE_RG;
        $this->INSC_MUN = $INSC_MUN;
        $this->email = $email;
    }

    public function addAddress(Address $address)
    {
        $this->Address[] = $address;
    }

    public function addPhone(Phone $phone)
    {
        $this->Phones[] = $phone;
    }
}
