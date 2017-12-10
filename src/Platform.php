<?php

namespace App\Ituran;

class Platform
{
    public $FIPE = null;
    public $plate = null;
    public $chassis = null;
    public $year = null;
    public $color = null;
    public $renavan = null;
    public $cab = null;
    public $_0km = null;
    public $armored = null;
    public $modified = null;
    public $taxExemption = null;
    public $transpPassageiros = null;

    public function __construct(
        $FIPE,
        $plate,
        $chassis,
        $year,
        $color,
        $renavan,
        $cab,
        $_0km,
        $armored,
        $modified,
        $taxExemption,
        $transpPassageiros
    ) {
        $this->FIPE = $FIPE;
        $this->plate = $plate;
        $this->chassis = $chassis;
        $this->year = $year;
        $this->color = $color;
        $this->renavan = $renavan;
        $this->cab = $cab;
        $this->_0km = $_0km;
        $this->armored = $armored;
        $this->modified = $modified;
        $this->taxExemption = $taxExemption;
        $this->transpPassageiros = $transpPassageiros;
    }
}
