<?php

namespace App\Http\Controllers;

use App\Models\Zadatak;
use Illuminate\Http\Request;

class ZadatakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return datatables()->of(\App\Models\Zadatak::all())
            ->addColumn('action', function($item){
            return '<button class="btn btnEditZadatak" data-id="'.$item->id.'"><i class="far fa-edit"></i></button>'
                .'<button class="btn btnRemoveZadatak" data-id="'.$item->id.'"><i class="far fa-trash-alt"></i></button';
            })
            ->make(true);
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
     * @param  \App\Models\Zadatak  $zadatak
     * @return \Illuminate\Http\Response
     */
    public function show(Zadatak $zadatak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zadatak  $zadatak
     * @return \Illuminate\Http\Response
     */
    public function edit(Zadatak $zadatak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zadatak  $zadatak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zadatak $zadatak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zadatak  $zadatak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zadatak $zadatak)
    {
        //
    }
}
