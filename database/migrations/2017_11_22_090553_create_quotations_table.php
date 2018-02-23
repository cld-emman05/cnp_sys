<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->increments('id'); //->unsigned();
            $table->double('amount_quoted');
            $table->date('date_submitted');
            $table->date('date_approved')->nullable();
            $table->date('date_rejected')->nullable();
            $table->mediumText('comments')->nullable();
            $table->timestamps();

            // $table->primary('id')->autoIncrement();

            $table->integer('order_id')->nullable()->unsigned();
            $table->integer('offset_type_id')->nullable()->unsigned();
            $table->integer('diecutting_type_id')->nullable()->unsigned();

            // $table->index('order_id','order_id_idx');
            // $table->index('paper_type_id','paper_type_id_idx');
            // $table->index('offset_type_id','offset_type_id_idx');
            // $table->index('lamination_type_id','lamination_type_id_idx');
            // $table->index('binding_type_id','binding_type_id_idx');
            // $table->index('diecutting_type_id','diecutting_type_id_idx');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotations');
    }
}
