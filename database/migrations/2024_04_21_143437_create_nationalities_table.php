<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNationalitiesTable extends Migration
{
    public function up()
    {
        Schema::create('nationalities', function (Blueprint $table) {
            $table->id('nationality_id');
            $table->string('nationality_name', 50);
            $table->char('nationality_code', 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nationalities');
    }
}
