<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // id (bigint unsigned, primary key)
            $table->unsignedBigInteger('category_id'); // category_id (bigint unsigned)
            $table->string('first_name', 255); // first_name (varchar(255))
            $table->string('last_name', 255); // last_name (varchar(255))
            $table->tinyInteger('gender'); // gender (tinyint)
            $table->string('email', 255); // email (varchar(255))
            $table->string('tell', 255); // tell (varchar(255))
            $table->string('address', 255); // address (varchar(255))
            $table->string('building', 255)->nullable(); // building (varchar(255), nullable)
            $table->text('detail'); // detail (text)
            $table->timestamps(); // created_at and updated_at (timestamps)
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}

