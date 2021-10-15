<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('usersAdmin', function (Blueprint $table) {
            $table->bigIncrements('idUser');
            $table->string('userName');
            $table->string('email');
            $table->string('passWord');
            $table->string('fullName');
            $table->integer('idAuthority')->unsigned();
            $table->boolean('show');
            $table->timestamps();
        });

        Schema::table('usersAdmin', function (Blueprint $table) {
            $table->foreign('idAuthority')->references('idAuthority')->on('authority');
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
        Schema::dropIfExists('usersAdmin');
    }
}
