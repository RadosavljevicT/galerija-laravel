<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('umetnickodelos', function (Blueprint $table) {
            $table->after('galerija_id', function ($table) {
                
                $table->foreignId('umetnik_id')->constrained('umetniks');

            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('umetnickodelos', function (Blueprint $table) {
            //
        });
    }
};
