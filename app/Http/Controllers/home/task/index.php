<?php

namespace App\Http\Controllers\home\task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\app\config\index as Config;

class index extends Controller
{
    //
    public function main(Request $request)
    {
        //
        $Config = new Config;

        $thisDate = date('Y-m-d', time());

        //verify
        if( $request->token != null )
        {
            $data = [
                'URI'       =>  $Config->URI(),
                'title'     =>  'Task | ' . $Config->apps()['namelabel'],
                'apps'      =>  $Config->apps(),
                'say'       =>  $Config->sayTimeGo(),
                'monthDate'     =>  date('Y-m', strtotime($thisDate)),
                'monthRead'      =>  $Config->bulanFull( date('m', strtotime($thisDate) )) . '-' . date('Y', strtotime($thisDate)),
                'thisDate'      =>  strtotime($thisDate) . '000'
            ];
            
            return view('home.task.verif')->with($data);

        }
        //
        $data = [
            'URI'       =>  $Config->URI(),
            'title'     =>  'Task | ' . $Config->apps()['namelabel'],
            'apps'      =>  $Config->apps(),
            'say'       =>  $Config->sayTimeGo(),
            'monthDate'     =>  date('Y-m', strtotime($thisDate)),
            'monthRead'      =>  $Config->bulanFull( date('m', strtotime($thisDate) )) . '-' . date('Y', strtotime($thisDate)),
            'thisDate'      =>  strtotime($thisDate) . '000'
        ];
        
        return view('home.task.index')->with($data);
    }
}
