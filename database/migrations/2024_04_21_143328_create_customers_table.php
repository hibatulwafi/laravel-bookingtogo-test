<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('cst_id'); 
            $table->unsignedBigInteger('nationality_id');
            $table->string('cst_name', 50);
            $table->date('cst_dob');
            $table->string('cst_phoneNum', 20);
            $table->string('cst_email', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
