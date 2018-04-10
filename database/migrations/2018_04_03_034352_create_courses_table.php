<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->text('description');
            $table->float('rating');
            $table->integer('category_id');
            $table->integer('student_enroll');
            $table->integer('creator_id');
            $table->string('language', 30);
            $table->mediumInteger('price');
            $table->tinyInteger('discount');
            $table->text('include');
            $table->string('thumbnail', 100);
            $table->string('video', 100);
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
        Schema::dropIfExists('courses');
    }
}
