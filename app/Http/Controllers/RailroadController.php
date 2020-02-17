<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Railroad;
use App\Station;
class RailroadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($station_id)
    {
        //
        $stationName = Station::where('id', $station_id)->first();
        $railroads = Railroad::where('station_id', $station_id)->get();
        return view('railroads.index', [ 
            'railroads' => $railroads,
            'station_id' => $station_id,
            'station_name' => $stationName->name
                   ]);
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
    public function store(Request $request, $station_id)
    {
        $railroad = new Railroad;
        $dane = $request->all();
        $railroad->fill($dane);
        $railroad->station_id = $station_id;
        $railroad->save();
        return redirect()->route('railroad.index', $station_id)->with('status', 'Zwrotnica została dodana');	
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
    public function update(Request $request, $station_id)
    {
        //
        //$railroad = new Railroad;
        $tablica = array_filter($request->input('zwrotnica'));
        foreach($tablica as $key => $x)
        {
            $railroad = Railroad::where('id', $key)->first();
            $railroad->name = $x;
            $railroad->station_id = $station_id;
            $railroad->save();
            //echo $key .'->'.$x.'</br>';
        }
        return redirect()->route('railroad.index', $station_id)->with('status', 'Lista zwrotnic zaktualizowana');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($station_id, $id)
    {
        //
        $railroad = Railroad::find($id);
        $railroad->delete();
        return redirect()->route('railroad.index', $station_id);	
    }
    
}
