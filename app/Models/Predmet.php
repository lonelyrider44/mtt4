<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Predmet extends Model
{
    use HasFactory;
    protected $fillable = ['naziv', 'id_nivoa', 'strucan_predmet'];
}
