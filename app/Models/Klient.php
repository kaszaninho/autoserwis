<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klient extends Model
{
    //use HasFactory;
	protected $fillable = ['id', 'imie', 'nazwisko', 'adres_email'];
	protected $table = 'klienci';
	
	public function samochody() {
		return $this->hasMany(Samochod::class, 'idKlienta');
	}
	
}
