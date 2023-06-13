<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('profession');
            $table->string('email');
            $table->string('phone_number');
            $table->string('image_path');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slugg')->unique();
            $table->timestamps();

        });

        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mentor_id');
            $table->unsignedInteger('category_id');
            $table->string('slug')->unique();
            $table->string('title');
            $table->longText('start');
            $table->longText('description');
            $table->string('topics');
            $table->Text('content');
            $table->string('duration');
            $table->string('level');
            $table->string('price');
            $table->string('image_path');
            $table->foreign('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('mentors');
    }
};
