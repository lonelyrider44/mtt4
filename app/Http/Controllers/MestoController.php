<?php

namespace App\Http\Controllers;

use App\Models\Mesto;
use Illuminate\Http\Request;

class MestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return datatables()->of(\App\Models\Mesto::all())
            ->addColumn('action', function($item){
            return '<button class="btn btnEditMesto" data-id="'.$item->id.'"><i class="far fa-edit"></i></button>'
                .'<button class="btn btnRemoveMesto" data-id="'.$item->id.'"><i class="far fa-trash-alt"></i></button';
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
            'naziv' => 'required'
        ]);
        \App\Models\Mesto::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mesto  $mesto
     * @return \Illuminate\Http\Response
     */
    public function show(Mesto $mesto)
    {
        return $mesto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mesto  $mesto
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesto $mesto)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mesto  $mesto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mesto $mesto)
    {
        $request->validate([
            'naziv' => 'required'
        ]);
        $mesto->fill($request->all());
        $mesto->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mesto  $mesto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesto $mesto)
    {
        $mesto->delete();
    }
}
