<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations for project "AUTOSERWIS".
     */
    public function up(): void
    {
        Schema::create('klienci', function (Blueprint $table) {
            $table->id();
			$table->string('imie');
			$table->string('nazwisko');
			$table->string('adres_email');
            $table->timestamps();			
        });
        Schema::create('samochody', function (Blueprint $table) {
            $table->id();
			$table->integer('idKlienta');
			$table->string('marka');
			$table->string('model');
			$table->string('rocznik');
			$table->string('nrRejestracyjny');
            $table->timestamps();			
        });
        Schema::create('serwisy', function (Blueprint $table) {
            $table->id();
			$table->integer('idKlienta');
			$table->integer('idSamochodu');
			$table->string('dataSerwisu');
			$table->float('cena');
            $table->timestamps();			
        });
        Schema::create('typySerwisu', function (Blueprint $table) {
            $table->id();
			$table->string('nazwa');
			$table->float('cena');
            $table->timestamps();			
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klienci');
        Schema::dropIfExists('samochody');
        Schema::dropIfExists('serwisy');
        Schema::dropIfExists('typySerwisu');
    }
};
