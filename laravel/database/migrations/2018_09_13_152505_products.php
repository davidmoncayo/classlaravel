<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('products_cmp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('cantidad');
            $table->string('descripcion');
            $table->string('precio');
            $table->string('ruta');
            $table->string('activo');
            $table->integer('user_pub');
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
        Schema::dropIfExists('products_cmp');
    }
}
