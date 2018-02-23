<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id'); //->unsigned();
            $table->date('invoice_date')->nullable();
            $table->date('due_date')->nullable();
            $table->timestamps();

            $table->integer('quote_id')->nullable()->unsigned();


            // $table->primary('id')->autoIncrement();
            // $table->index('invoice_product_id','invoice_product_id_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
