<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logs;
use Illuminate\Support\Facades\DB;

class LogsChartController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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

        return view('chart', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
