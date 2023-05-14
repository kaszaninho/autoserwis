<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SerwisSamochodu extends Model
{    
	//use HasFactory;
	protected $fillable = ['id', 'idKlienta', 'idSamochodu', 'DataSerwisu', 'Cena'];
	protected $table = 'serwisy';
}
