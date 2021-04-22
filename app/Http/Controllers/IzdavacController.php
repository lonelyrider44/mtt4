<?php

namespace App\Http\Controllers;

use App\Models\Izdavac;
use Illuminate\Http\Request;

class IzdavacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return datatables()->of(\App\Models\Izdavac::all())
            ->addColumn('action', function($item){
                return '<button class="btn btnEditIzdavac" data-id="'.$item->id.'"><i class="far fa-edit"></i></button>'
                    .'<button class="btn btnRemoveIzdavac" data-id="'.$item->id.'"><i class="far fa-trash-alt"></i></button';
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
        \App\Models\Izdavac::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Izdavac  $izdavac
     * @return \Illuminate\Http\Response
     */
    public function show(Izdavac $izdavac)
    {
        return $izdavac;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Izdavac  $izdavac
     * @return \Illuminate\Http\Response
     */
    public function edit(Izdavac $izdavac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Izdavac  $izdavac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Izdavac $izdavac)
    {
        $request->validate([
            'naziv' => 'required'
        ]);
        $izdavac->fill($request->all());
        $izdavac->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Izdavac  $izdavac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Izdavac $izdavac)
    {
        $izdavac->delete();
    }
}
