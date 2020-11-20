<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('assignment_id');
            $table->unsignedBigInteger('user_id');

            $table->longText('students_name');
            $table->string('image');

            $table->index('assignment_id');
             $table->index('user_id');
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
        Schema::dropIfExists('assignos');
    }
}
