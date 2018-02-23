<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffsetTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offset_types', function (Blueprint $table) {
            $table->increments('id'); //->unsigned();
            $table->string('type');
            $table->string('description');
            $table->double('price')->nullable();

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
        Schema::dropIfExists('offset_types');
    }
}
