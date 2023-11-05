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
        Schema::create('umetnickodelos', function (Blueprint $table) {
            $table->id();
            $table->string('nazivDela');
            $table->text('opisDela');
            $table->foreignId('galerija_id')->constrained('galerijas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('umetnickodelos');
    }
};
