<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersClient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('usersClient', function (Blueprint $table) {
            $table->bigIncrements('idUserClient');
            $table->string('userName');
            $table->string('email');
            $table->string('passWord');
            $table->string('fullName');
            $table->integer('phoneNumber');
            $table->string('address');
            $table->string('city');
            $table->string('district');
            $table->string('ward');
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
        Schema::dropIfExists('usersClient');
    }
}
