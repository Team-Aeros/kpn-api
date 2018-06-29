<?php

namespace App\Http\Controllers;

use \SoapClient;
use Illuminate\Http\Request;

class SoapController extends Controller
{
    public function show()
    {
        $client = new SoapClient('http://standardlogics.com/FrontDesk.asmx?wsdl');

        $response = $client->__soapCall("GetCustomerDetails", []);
        dd($response);
    }

    public function getUser()
    {
        return 1;
    }
}
