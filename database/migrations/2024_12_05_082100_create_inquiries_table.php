<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquiriesTable extends Migration
{
    public function up()
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('email');
            $table->string('inquiry_type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inquiries');
    }
}

