<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Samochod extends Model
{
    //use HasFactory;
	protected $fillable = ['id', 'idKlienta', 'marka', 'model', 'rocznik', 'nrRejestracyjny'];
	protected $table = 'samochody';
	public function klient() {
		return $this->belongsTo(Klient::class, 'idKlienta');		
	}
	public function serwis() {
		return $this->hasMany(SerwisSamochodu::class, 'idSamochodu');
	}
}
