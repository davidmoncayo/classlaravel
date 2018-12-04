<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Communication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communication_cmp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mensaje');
            $table->string('id_user');
            $table->string('id_fab');
            $table->string('id_publicador');
            $table->rememberToken();
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
         Schema::dropIfExists('communication_cmp');
    }
}
