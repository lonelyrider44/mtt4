<?php

namespace App\Http\Controllers;

use App\Models\Skola;
use Illuminate\Http\Request;

class SkolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return datatables()->of(\App\Models\Skola::all())
            ->addColumn('action', function($item){
            return '<button class="btn btnEditSkola" data-id="'.$item->id.'"><i class="far fa-edit"></i></button>'
                .'<button class="btn btnRemoveSkola" data-id="'.$item->id.'"><i class="far fa-trash-alt"></i></button';
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
     * @param  \App\Models\Skola  $skola
     * @return \Illuminate\Http\Response
     */
    public function show(Skola $skola)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skola  $skola
     * @return \Illuminate\Http\Response
     */
    public function edit(Skola $skola)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skola  $skola
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skola $skola)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skola  $skola
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skola $skola)
    {
        //
    }
}
