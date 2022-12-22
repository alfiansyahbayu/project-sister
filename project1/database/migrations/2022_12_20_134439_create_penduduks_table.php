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
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->integer('pekerjaan_id');
            $table->integer('umur_rentang_id');
            $table->integer('hubungan_id');
        });

        Schema::connection('mysql_2')->create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->integer('pekerjaan_id');
            $table->integer('umur_rentang_id');
            $table->integer('hubungan_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduks');
        Schema::connection('mysql_2')->dropIfExists('penduduks');
    }
};
