<?php

namespace App\Ituran;

class Workshop
{
    public $workshopId = null;
    public $name = null;
    public $address = null;
    public $city = null;
    public $state = null;
    public $zipcode = null;
    public $neighborhood = null;
    public $latitude = null;
    public $longitude = null;
    public $phones = null;
    public $vehicleTypes = null;
    public $distanceFromClient = null;
    public $description = null;
    public $dates = [];

    public function __construct(
        $workshopId,
        $name,
        $address,
        $city,
        $state,
        $zipcode,
        $neighborhood,
        $latitude,
        $longitude,
        $phones,
        $vehicleTypes,
        $distanceFromClient,
        $description
    ) {
        $this->workshopId = $workshopId;
        $this->name = $name;
        $this->address = $address;
        $this->city = $city;
        $this->state = $state;
        $this->zipcode = $zipcode;
        $this->neighborhood = $neighborhood;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->phones = $phones;
        $this->vehicleTypes = $vehicleTypes;
        $this->distanceFromClient = $distanceFromClient;
        $this->description = $description;
    }

    public function addDate(WorkshopDates $date)
    {
        $this->dates[] = $date;
    }
}
