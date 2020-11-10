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
        // $stt = Logs::select(DB::raw("COUNT(*) as count")) 
        //         ->groupBy('state')
        //         ->pluck('count');
        // $iden = Logs::select(DB::raw("Logs(identity) as identitas"))
        //         ->where('identity')
        //         ->groupBy(DB::raw("Logs(identity)"))
        //         ->pluck('identitas');

        $negara = \App\Models\Logs::all();

        $categories = [];

        foreach ($negara as $stt) {
            $categories[] = $stt->state;
        }

        //dd(json_encode($categories));

        return view('chart', ['categories' => $categories]);

        
        // foreach ($iden as $indeks => $identitas) {
        //     $logs[$identitas] = $identity[$indeks];
        // }

        //return view('chart', compact('logs'));
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
