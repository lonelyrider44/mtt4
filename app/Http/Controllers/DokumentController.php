<?php

namespace App\Http\Controllers;

use App\Models\Dokument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return datatables()->of(\App\Models\Dokument::all())
            ->addColumn('action', function($item){
            return '<button class="btn btnEditDokument" data-id="'.$item->id.'"><i class="far fa-edit"></i></button>'
                .'<button class="btn btnRemoveDokument" data-id="'.$item->id.'"><i class="far fa-trash-alt"></i></button';
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

        if(!empty($request->file)){
            Storage::disk('documents')->put('file.jpg',  base64_decode($request->file));
        }

        // $path = $request->file('file')->storeAs(
        //     'avatars',
        //     'test',
        //     'documents'
        // );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dokument  $dokument
     * @return \Illuminate\Http\Response
     */
    public function show(Dokument $dokument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dokument  $dokument
     * @return \Illuminate\Http\Response
     */
    public function edit(Dokument $dokument)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dokument  $dokument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dokument $dokument)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokument  $dokument
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokument $dokument)
    {
        //
    }
}
