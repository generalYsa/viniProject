<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userActivity', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userID');
            $table->integer('activityID');
            $table->integer('score')->default(0);
            $table->boolean('isPost');
			$table->string('file');
            $table->boolean('viewed')->default(false);
            $table->boolean('isDone')->default(false);
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
        Schema::dropIfExists('userActivity');
    }
}
