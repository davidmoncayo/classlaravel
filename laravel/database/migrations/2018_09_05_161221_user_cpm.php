<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserCpm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_cpm', function (Blueprint $table) {
            $table->increments('iduser');
            $table->timestamps();
            $table->string('nombres',45);
            $table->string('apellidos',45);
            $table->string('telefono', 10);
            $table->string('direccion',45);
            $table->integer('edad');
            $table->string('email',45)->unique();
            $table->string('genero',10);
            $table->string('usuario',45)->nullable();
            $table->string('contrasena',45)->nullable();
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_cpm');
    }
}
