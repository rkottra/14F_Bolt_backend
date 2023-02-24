<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('termekek', function (Blueprint $table) {
            $table->id();
            $table->string('nev', 100);
            $table->string('kepUrl');
            $table->string('leiras');
            $table->integer('ar');
            $table->double('kedvezmeny');
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
        Schema::dropIfExists('termekek');
    }
}
