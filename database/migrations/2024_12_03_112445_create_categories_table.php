<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
public function up()
{
    Schema::create('categories', function (Blueprint $table) {
        $table->id(); // id (bigint unsigned)
        $table->string('content', 255); // content (varchar(255))
        $table->timestamps(); // created_at and updated_at (timestamps)
    });
}


    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
