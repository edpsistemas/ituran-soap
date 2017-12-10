<?php

namespace App\Ituran;

use DateTime;

class ScheduleOrder extends SOAPService
{
    public $orderId = null;
    public $workshopId = null;
    public $scheduleDate = null;
    public $periodNumber = null;

    public function __construct($orderId, $workshopId, DateTime $scheduleDate, $periodNumber)
    {
        $this->orderId = $orderId;
        $this->workshopId = $workshopId;
        $this->scheduleDate = $scheduleDate->format('Y-m-d\TH:i:s');
        $this->periodNumber = $periodNumber;
    }

    public function put()
    {
        $response = $this->client->call('scheduleOrder', $this);
        $response = $response->ScheduleOrderResult;
        return new ScheduleOrderReturn($response->returnCode, $response->returnMessage);
    }
}
