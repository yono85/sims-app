<?php

namespace App\Http\Controllers\package\uagent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class index extends Controller
{
    //
    public function main()
    {
        $agent = new Agent();

        $data = [
            'os'                =>  $agent->device(),
            'platform'          =>  $agent->platform(),
            'platform ver'      =>  $agent->version( $agent->platform() ),
            'device'            => ($agent->isMobile() ? ($agent->isTablet() ? 'Tablet' : 'Phone') : 'Desktop'),
            'browser'           =>  $agent->browser(),
            'browser ver'       =>  $agent->version( $agent->browser() )
        ];

        return $data;
    }
}
