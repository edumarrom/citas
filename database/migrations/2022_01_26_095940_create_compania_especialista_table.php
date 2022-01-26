<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniaEspecialistaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compania_especialista', function (Blueprint $table) {
            $table->foreignId('especialista_id')->constrained();
            $table->foreignId('compania_id')->constrained();
            $table->primary(['especialista_id', 'compania_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compania_especialista');
    }
}
