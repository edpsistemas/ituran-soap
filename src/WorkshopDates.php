<?php

namespace App\Ituran;

class WorkshopDates
{
    public $date = null;
    public $hours = [];

    public function __construct($date)
    {
        $this->date = $date;
    }

    public function addHour(WorkshopHour $hour)
    {
        $this->hours[] = $hour;
    }
}
