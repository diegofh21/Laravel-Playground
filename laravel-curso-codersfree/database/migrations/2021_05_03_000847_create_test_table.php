<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('user_id')
            ->constrained('users')
            ->onDelete('cascade');

            // $table->unsignedSmallInteger('id_tipo_usuarios');
            // $table->foreign('id_tipo_usuarios')->references('id_tipo_usuarios')->on('tipo_usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test');
    }
}
