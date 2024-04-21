<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyListsTable extends Migration
{
    public function up()
    {
        Schema::create('family_lists', function (Blueprint $table) {
            $table->id('fl_id');
            $table->unsignedBigInteger('cst_id');
            $table->string('fl_name', 50);
            $table->date('fl_dob');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('family_lists');
    }
}
