<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sesi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create table Sesi
        Schema::create ('sesi', function (Blueprint $table) {

            $table -> increments('id');
            $table -> string('name');
            $table -> boolean('status') -> nullable();
            $table -> string('pingat');
            $table -> timestamps();
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
