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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('conductor');
            $table->biginteger('documentoconductor');
            $table->string('modelo');
            $table->integer('anno');
            $table->string('matricula');
            $table->string('placa');
            $table->string('tecnomecanica')->nullable();
            $table->string('soat')->nullable();
            $table->string('targetapropiedad')->nullable();
            $table->date('fechavencimiento');
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
        Schema::dropIfExists('vehiculos');
    }
};
