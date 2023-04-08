<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class kuesioners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuesioners', function (Blueprint $table) {
            
            $table->integer('interface')->nullable();
            $table->integer('daya')->default('');
            $table->integer('mudah')->nullable();
            $table->integer('lengkap')->default('');
            $table->integer('jelas')->nullable();
            $table->integer('friend')->default('');
            $table->integer('nilai')->default('');

            
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_checkbox_tbls');
    }
}