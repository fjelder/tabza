<?php

namespace App\Http\Controllers;

use App\lk;
use Illuminate\Http\Request;

class lkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lks = lk::all();
        // echo '<pre>';
        // //print_r($lks);
        // foreach($lks as $lk)
        // {
        //     echo $lk->number.'---';
        //     echo $lk->nameA.'--';
        //     echo $lk->nameB.'</br>';
        //     foreach($lk->stations as $station)
        //     {
        //         echo '<li>'.$station->name.'</li>';
        //     }
        // }
        // echo '</pre>';
        return view('lk.index', ['lks' => $lks]);
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
     * @param  \App\lk  $lk
     * @return \Illuminate\Http\Response
     */
    public function show(lk $lk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lk  $lk
     * @return \Illuminate\Http\Response
     */
    public function edit(lk $lk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lk  $lk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lk $lk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lk  $lk
     * @return \Illuminate\Http\Response
     */
    public function destroy(lk $lk)
    {
        //
    }
}
