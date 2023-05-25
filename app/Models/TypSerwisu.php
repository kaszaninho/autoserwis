<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypSerwisu extends Model
{
    //use HasFactory;
	protected $fillable = ['id', 'nazwa', 'cena'];
	protected $table = 'typySerwisu';
	public $timestamps = false;
}
