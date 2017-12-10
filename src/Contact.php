<?php

namespace App\Ituran;

class Contact
{
    const RELATION_LEVEL_MOTHER = 1;
    const RELATION_LEVEL_FATHER = 2;
    const RELATION_LEVEL_FRIEND = 3;
    const RELATION_LEVEL_SIBLING = 4;
    const RELATION_LEVEL_NOT_SPECIFIED = 5;
    const RELATION_LEVEL_CUSTOMER = 6;
    const RELATION_LEVEL_COMPANY_OWNER = 7;
    const RELATION_LEVEL_HUSBAND = 8;
    const RELATION_LEVEL_WIFE = 9;
    const RELATION_LEVEL_DRIVER = 10;
    const RELATION_LEVEL_RELATIVE = 11;
    const RELATION_LEVEL_EMPLOYEE = 12;
    const RELATION_LEVEL_FLEET_MANAGER = 13;
    const RELATION_LEVEL_BROKER = 14;
    const RELATION_LEVEL_RISK_PLAYER = 15;
    const RELATION_LEVEL_PARTNER = 16;
    const RELATION_LEVEL_FATHER_IN_LAW = 17;
    const RELATION_LEVEL_BROTHER_IN_LAW = 18;
    const RELATION_LEVEL_MATE = 19;
    const RELATION_LEVEL_UNCLE = 20;
    const RELATION_LEVEL_GRANDPARENTS = 21;
    const RELATION_LEVEL_NEIGHBOR = 22;
    const RELATION_LEVEL_CHILDREN = 23;
    const RELATION_LEVEL_RESPONSIBLE = 24;
    const RELATION_LEVEL_SECRETARY = 25;
    const RELATION_LEVEL_USER = 26;

    public $name = null;
    public $relationLevel = null;
    public $phone = null;

    public function __construct($name, $relationLevel, Phone $phone)
    {
        $this->name = $name;
        $this->relationLevel = $relationLevel;
        $this->phone = $phone;
    }
}
