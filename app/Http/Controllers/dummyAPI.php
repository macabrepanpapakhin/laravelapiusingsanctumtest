<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    //

    public function getData(){
        return [
            ['name'=>'cardi_ender',
            'job'=>'jobless',
            'achievement'=>'cardi_ender_top_chart_twice']
        ];
    }
}
