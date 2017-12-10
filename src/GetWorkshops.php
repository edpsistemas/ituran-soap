<?php

namespace App\Ituran;

use DateTime;

class GetWorkshops extends SOAPService
{
    public $zipCode = null;
    public $orderId = null;

    public function __construct($zipCode, $orderId)
    {
        $this->zipCode = $zipCode;
        $this->orderId = $orderId;
    }

    public function get()
    {
        $response = $this->client->call('getWorkshops', $this);
        $workshops = [];
        foreach ($response->GetWorkshopsResult->Workshop as $workshopData) {
            $workshop = new Workshop(
                $workshopData->workshopId,
                $workshopData->name,
                $workshopData->address,
                null,
                null,
                null,
                null,
                $workshopData->latitude,
                $workshopData->longitude,
                null,
                null,
                $workshopData->distanceFromClient,
                null
            );

            $dates = $workshopData->dates;
            foreach ($dates->WorkshopDates as $workshopDates) {
                $date = DateTime::createFromFormat('d/m/Y', $workshopDates->date);
                $workshopDate = new WorkshopDates($date);
                if (!property_exists($workshopDates->hours, 'WorkshopHour')) {
                    continue;
                }

                foreach ($workshopDates->hours->WorkshopHour as $workshopHours) {
                    $workshopHour = new WorkshopHour(
                        $workshopHours->periodNumber,
                        $workshopHours->periodDescription,
                        $workshopHours->available
                    );

                    $workshopDate->addHour($workshopHour);
                }
                $workshop->addDate($workshopDate);
            }
            $workshops[] = $workshop;
        }

        return $workshops;
    }
}
