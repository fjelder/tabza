<?php

namespace App\Http\Controllers;

use App\iz;
use Illuminate\Http\Request;

class izController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $iz = iz::all();
        // echo '<pre>';
        // var_dump($iz);
        // echo '</pre>';
        return view('iz.index', ['izs' => $iz]);
        //return view('iz.index', compact('iz', $iz));
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
     * @param  \App\iz  $iz
     * @return \Illuminate\Http\Response
     */
    public function show(iz $iz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\iz  $iz
     * @return \Illuminate\Http\Response
     */
    public function edit(iz $iz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\iz  $iz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, iz $iz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\iz  $iz
     * @return \Illuminate\Http\Response
     */
    public function destroy(iz $iz)
    {
        //
    }
}
