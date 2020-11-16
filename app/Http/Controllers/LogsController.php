<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Logs;

class LogsController extends Controller
{
    // function postLogs(Request $request){

    //     $logs = new Logs; 
    //     $logs->instance = $request->instance;
    //     $logs->identity = $request->identity;

    //     $logs->save();

    //     return response()->json(
    //         [
    //             "message" => "Success",
    //             "data" => $logs
    //         ]
    //     );
    // }

    function getLogs(){

        $instance = Logs::select(DB::raw("COUNT(*) as count"))
                    ->whereYear('date', date('Y'))
                    ->groupBy(DB::raw("Month(date)"))
                    ->pluck('count');

        $months = Logs::select(DB::raw("Month(date) as month"))
                ->whereYear('date', date('Y'))
                ->groupBy(DB::raw("Month(date)"))
                ->pluck('month');

        $logs = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach ($months as $indeks => $month) {
            $logs[$month] = $instance[$indeks];
        }

        return view('logs.logs', compact('logs'));
    }
}
