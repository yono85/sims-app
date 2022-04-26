<?php

namespace App\Http\Controllers\package\geoip;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GeoIp;

class index extends Controller
{
    //
    public function main($request)
    {
        $arrIP = geoip()->getLocation($request['ip']);
    
        $data = [
            'ip'                =>  $arrIP['ip'],
            'code'              =>  $arrIP['iso_code'],
            'country'            =>  $arrIP['country'],
            'city'              =>  $arrIP['city'],
            'state'             =>  $arrIP['state'],
            'state_name'        =>  $arrIP['state_name'],
            'kodepos'           =>  $arrIP['postal_code'],
            'latitude'          =>  $arrIP['lat'],
            'longitude'         =>  $arrIP['lon'],
            'timezone'          =>  $arrIP['timezone'],
            'currency'          =>  $arrIP['currency']
        ];

        return $data;
    }
}
