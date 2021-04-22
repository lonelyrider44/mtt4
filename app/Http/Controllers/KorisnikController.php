<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KorisnikController extends Controller
{
    public function index(){
        return datatables()->of(\App\Models\User::select('users.*', 'users.name as naziv'))
                ->addColumn('action', function($item){
                return '<button class="btn btnEditKorisnik" data-id="'.$item->id.'"><i class="far fa-edit"></i></button>'
                    .'<button class="btn btnRemoveKorisnik" data-id="'.$item->id.'"><i class="far fa-trash-alt"></i></button';
                })
                ->make(true);
    }
}
