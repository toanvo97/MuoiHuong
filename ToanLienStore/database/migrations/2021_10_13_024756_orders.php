<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('idOrder');
            $table->string('name');
            $table->string('meta');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('country');
            $table->string('address');
            $table->string('city');
            $table->string('phoneNumber');
            $table->string('email');
            $table->string('anotherAddress');
            $table->string('ortherNote');
            $table->integer('idUser')->unsigned();
            $table->date('orderDateConfirmed');
            $table->date('orderDateDelivered');
            $table->string('link');
            $table->boolean('show');
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
        //
    }
}
