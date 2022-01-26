<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('especialista_id')->constrained();
            $table->timestamp('fecha_hora');
            // user_id puede ser NULL (cita disponible).
            $table->foreignId('user_id')->nullable()->constrained();
            $table->timestamps();
            // Nunca puede existir más de una cita con la misma fecha/hora y el mismo especialista.
            $table->unique(['especialista_id', 'fecha_hora']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
