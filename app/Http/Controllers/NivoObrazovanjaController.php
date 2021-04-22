<?php

namespace App\Http\Controllers;

use App\Models\NivoObrazovanja;
use Illuminate\Http\Request;

class NivoObrazovanjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \App\Models\NivoObrazovanja::all();
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
     * @param  \App\Models\NivoObrazovanja  $nivoObrazovanja
     * @return \Illuminate\Http\Response
     */
    public function show(NivoObrazovanja $nivoObrazovanja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NivoObrazovanja  $nivoObrazovanja
     * @return \Illuminate\Http\Response
     */
    public function edit(NivoObrazovanja $nivoObrazovanja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NivoObrazovanja  $nivoObrazovanja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NivoObrazovanja $nivoObrazovanja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NivoObrazovanja  $nivoObrazovanja
     * @return \Illuminate\Http\Response
     */
    public function destroy(NivoObrazovanja $nivoObrazovanja)
    {
        //
    }
}
