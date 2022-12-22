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
        Schema::create('hubungans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
        });
        Schema::connection('mysql_2')->create('hubungans', function (Blueprint $table) {
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
        Schema::dropIfExists('hubungans');
        Schema::connection('mysql_2')->dropIfExists('hubungans');
    }
};
