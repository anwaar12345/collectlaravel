<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterStoreAddUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('storecollections', function (Blueprint $table) {


            $table->bigInteger('uid')->unsigned();



        });

        Schema::table('storecollections', function (Blueprint $table) {


            $table->foreign('uid')->references('id')->on('users')->after('freeitems');




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
