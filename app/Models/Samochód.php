<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Samochód extends Model
{
    //use HasFactory;
	protected $fillable = ['id', 'idKlienta', 'marka', 'model', 'rocznik', 'nrRejestracyjny'];
	protected $table = 'samochody';
}
