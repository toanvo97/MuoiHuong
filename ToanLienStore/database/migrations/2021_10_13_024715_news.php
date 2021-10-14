<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('news', function (Blueprint $table) {
            $table->increments('idNew');
            $table->string('name',250);
            $table->string('meta',250);
            $table->string('image');
            $table->string('image_1');
            $table->string('image_2');
            $table->integer('idCate');
            $table->integer('content',11);
            $table->string('shortDescription',255);
            $table->string('descriptionDetail');
            $table->string('datePost',255);
            $table->string('comment');
            $table->string('authorImage',250);
            $table->string('authorName');
            $table->number('tag');
            $table->string('link');
            $table->integer('order');
            $table->boolean('status');
            $table->string('review');
            $table->boolean('show');
            $table->timestamps();
        });
        Schema::table('news', function (Blueprint $table) {
            $table->foreign('idCate')->references('idCate')->on('newsCategories');
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
        Schema::dropIfExists('news');
    }
}
