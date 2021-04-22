<?php

namespace App\Http\Controllers;

use App\Models\Predmet;
use Illuminate\Http\Request;

class PredmetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return datatables()->of(\App\Models\Predmet::all())
            ->addColumn('action', function($item){
            return '<button class="btn btnEditPredmet" data-id="'.$item->id.'"><i class="far fa-edit"></i></button>'
                .'<button class="btn btnRemovePredmet" data-id="'.$item->id.'"><i class="far fa-trash-alt"></i></button';
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
        $request->validate([
            'naziv' => 'required',
            'id_nivoa' => 'required'
        ]);
        \App\Models\Predmet::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Predmet  $predmet
     * @return \Illuminate\Http\Response
     */
    public function show(Predmet $predmet)
    {
        return $predmet;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Predmet  $predmet
     * @return \Illuminate\Http\Response
     */
    public function edit(Predmet $predmet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Predmet  $predmet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Predmet $predmet)
    {
        $request->validate([
            'naziv' => 'required',
            'id_nivoa' => 'required'
        ]);
        $predmet->fill($request->all());
        $predmet->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Predmet  $predmet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Predmet $predmet)
    {
        $predmet->delete();
    }
}
