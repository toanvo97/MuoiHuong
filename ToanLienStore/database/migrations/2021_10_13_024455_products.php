<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products', function (Blueprint $table) {
            $table->increments('idPro');
            $table->string('name',250);
            $table->string('meta',250);
            $table->string('image');
            $table->string('image_1');
            $table->string('image_2');
            $table->integer('idCate');
            $table->integer('price',11);
            $table->string('promotion',255);
            $table->string('shortDescription',255);
            $table->string('origin',255);
            $table->interger('quantity');
            $table->string('unit',250);
            $table->integer('rank');
            $table->boolean('like');
            $table->string('link');
            $table->integer('order');
            $table->boolean('status');
            $table->string('review');
            $table->double('rate');
            $table->boolean('show');
            $table->timestamps();
        });
        
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('idCate')->references('idCate')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('products');
    }
}
