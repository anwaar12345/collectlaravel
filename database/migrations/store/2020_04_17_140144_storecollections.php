<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Storecollections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('storecollections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company');
            $table->string('Model');
            $table->string('color');
            $table->string('price');
            $table->string('freeitems')->nullable();
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
