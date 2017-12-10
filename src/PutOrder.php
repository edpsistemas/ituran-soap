<?php

namespace App\Ituran;

class PutOrder extends SOAPService
{
    public $order = null;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function put()
    {
        $response = $this->client->call('putOrder', $this);
        return new PutOrderReturn($response->PutOrderResult);
    }
}
