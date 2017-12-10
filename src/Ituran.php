<?php

namespace App\Ituran;

use SoapClient;
use SoapHeader;

use SimpleXMLElement;

class Ituran
{
    protected $client;
    protected $options = [
        'trace'=>1,
        'cache_wsdl' => WSDL_CACHE_DISK,
        'soap_version' => SOAP_1_2
    ];

    protected $wsdl;
    protected $namespace;

    public function __construct($wsdl, $namespace, $user, $password)
    {
        $this->wsdl = $wsdl;
        $this->namespace = $namespace;
        $auth = [
            'user' => $user,
            'password' => $password,
        ];

        $this->client = new SoapClient($this->wsdl, $this->options);
        $header = new SoapHeader($this->namespace, 'AuthenticationUser', $auth);
        $this->client->__setSoapHeaders($header);
    }

    public function getLastRequest()
    {
        $xml = new SimpleXMLElement($this->client->__getLastRequest());
        $dom = dom_import_simplexml($xml)->ownerDocument;
        $dom->formatOutput = true;
        return $dom->saveXML();
    }

    public function call($method, $payload)
    {
        return $this->client->__soapCall($method, [$method => $payload]);
    }
}
