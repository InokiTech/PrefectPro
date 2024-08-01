<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradebookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gradebooks', function (Blueprint $table) {
            $table->id();
            $table->integer('class_id')->nullable(false);
            $table->integer('section_id')->nullable(false);
            $table->integer('student_id')->nullable(false);
            $table->integer('exam_category_id')->nullable(false);
            $table->string('marks', 255)->nullable();
            $table->string('comment', 255)->nullable(false);
            $table->integer('school_id')->nullable(false);
            $table->integer('session_id')->nullable(false);
            $table->integer('timestamp')->nullable(false);
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
        Schema::dropIfExists('gradebook');
    }
};
