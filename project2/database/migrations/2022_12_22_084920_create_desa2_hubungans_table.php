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
        Schema::create('desa2_hubungans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('Jumlah_L');
            $table->integer('Jumlah_P');
            $table->timestamp('periode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desa2_hubungans');
    }
};
