<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id'); //->unsigned();
            $table->string('job_name');
            $table->integer('quantity');
            $table->integer('page_count');
            $table->date('date_due');
            $table->string('file')->nullable();
            $table->string('status')->nullable();
            $table->string('comments')->nullable();
            $table->timestamps();

            $table->integer('customer_id')->nullable()->unsigned();
            $table->integer('sales_agent_id')->nullable()->unsigned();
            $table->integer('job_type_id')->nullable()->unsigned();
            $table->integer('cover_paper_id')->nullable()->unsigned();
            $table->integer('inside_paper_id')->nullable()->unsigned();
            $table->integer('size_type_id')->nullable()->unsigned();
            $table->integer('lamination_type_id')->nullable()->unsigned();
            $table->integer('binding_type_id')->nullable()->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
