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
        //         ->groupBy(\DB::raw("Logs(identity)"))
        //         ->pluck('identitas');

        // $users = User::select(\DB::raw("COUNT(*) as count"))
        //             ->whereYear('created_at', date('Y'))
        //             ->groupBy(\DB::raw("Month(created_at)"))
        //             ->pluck('count');

        // $results = User::select(\DB::raw('YEAR(birth_date) as year, COUNT(id) as amount'))
        //             ->groupBy(\DB::raw('YEAR(birth_date)'))
        //             ->get();

        // $pemilik = Pemilik::groupBy('mobil_id')->select('mobil_id', \DB::raw('count(*) as total'))->get();

        // $negara = \App\Models\Logs::all();

        // $categories = [];
        // $data = Logs::select(\DB::raw("COUNT(id) as count"))
        //             ->groupBy('state')
        //             ->get();

        $data = Logs::groupBy('state')->select('state', \DB::raw('COUNT(*) as jumlah'))->get();

        // foreach ($negara as $stt) {
        //     $categories[] = $stt->groupBy('state')->select();
        // }

        //dd(json_encode($data));

        return view('chart', compact('data'));

        //return view('chart', ['categories' => $categories, 'data' => $data]);
        
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
