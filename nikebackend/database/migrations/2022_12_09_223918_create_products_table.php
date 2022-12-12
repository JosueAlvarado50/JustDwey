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
        Schema::create('products', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('modelo');
            $table->string('tipo');
            $table->string('precio');
            $table->string('descripcion');
            $table->string('color');
            $table->integer('talla_26');
            $table->integer('talla_27');
            $table->string('img_model_1');
            $table->string('img_model_2');
            $table->string('img_model_3');
            $table->string('img_1');
            $table->string('img_2');
            $table->string('img_3');
            $table->string('img_4');
            $table->string('img_5');
            $table->string('img_6');
            $table->string('img_7');
            $table->string('img_8');
            $table->string('img_9');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
};