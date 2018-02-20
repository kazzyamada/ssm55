<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Task;

class AppController extends Controller
{
    //
    /**
     * sample api responce
     *
     * @return Response
     */
    public function echo1()
    {   
        \Log::debug(__METHOD__);
        
        $res['success'] = true;
        $res['message'] = "No problem";
        
        return \Response::json($res);
    }
}
