<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Station;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::all();
        return view('stations.index', compact('stations', $stations));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('stations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $station = new Station;
      $dane = $request->all();
      $station->fill($dane);
      $station->save();
      return redirect()->route('stations.index');	
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
        $station = Station::where('id', $id)->first();
        return view('stations.show', compact('station', $station));
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
        $station = Station::where('id', $id)->first();
        return view('stations.edit', compact('station', $station));
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
        $station = Station::where('id', $id)->first();
        $station->name = $request->input('name');
        $station->comments = $request->input('comments');
        $station->save();
        return redirect()->route('stations.index');
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
        $station = Station::find($id);
        $station->delete();
        return redirect()->route('stations.index');
    }
}
