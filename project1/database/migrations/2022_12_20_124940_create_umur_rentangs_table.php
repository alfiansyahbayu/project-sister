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
        Schema::create('umur_rentangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
        });
        Schema::connection('mysql_2')->create('umur_rentangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('umur_rentangs');
        Schema::connection('mysql_2')->dropIfExists('umur_rentangs');
    }
};
