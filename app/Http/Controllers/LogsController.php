<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logs;

class LogsController extends Controller
{
    function postLogs(Request $request){

        $logs = new Logs; 
        $logs->instance = $request->instance;
        $logs->identity = $request->identity;

        $logs->save();

        return response()->json(
            [
                "message" => "Success",
                "data" => $logs
            ]
        );
    }

    function getLogs(){

        $data['logs'] = \App\Models\Logs::get();
        // $data = Logs::all();

        return view('Logs.logs', $data);

        // return response()->json(
        //     [
        //         "message" => "Success",
        //         "data" => $data
        //     ]
        // );
    }
}
