<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //Schema::enableForeignKeyConstraints();
        Schema::create('job_types', function (Blueprint $table) {
            $table->increments('id'); //->unsigned();
            $table->string('name');
            $table->string('description');
            

            // $table->primary('id')->autoIncrement();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_types');
    }
}
