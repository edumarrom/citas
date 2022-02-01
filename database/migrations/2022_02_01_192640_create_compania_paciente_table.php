<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniaPacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compania_paciente', function (Blueprint $table) {
            $table->foreignId('paciente_id')->constrained();
            $table->foreignId('compania_id')->constrained();
            $table->primary(['paciente_id', 'compania_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compania_paciente');
    }
}
