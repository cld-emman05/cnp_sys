<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // for users
        Schema::table('users',function(Blueprint $table){
                    $table->foreign('user_type')
                    ->references('id')->on('user_types');
                  });
        // for quotations
        Schema::table('quotations',function(Blueprint $table){
                    $table->foreign('order_id')
                    ->references('id')->on('orders');
                    $table->foreign('offset_type_id')
                    ->references('id')->on('offset_types');
                    $table->foreign('diecutting_type_id')
                    ->references('id')->on('diecutting_types');
                  });
      // for paper types
    //   Schema::table('paper_types',function(Blueprint $table){
    //               $table->foreign('order_id')
    //               ->references('id')->on('orders');
    //               });
      // for order job types
      // Schema::table('order_job_types',function(Blueprint $table){
      //             $table->foreign('job_type_id')
      //             ->references('id')->on('job_types');
      //             });
     // for job types
    //  Schema::table('job_types',function(Blueprint $table){
    //               $table->foreign('order_job_id')
    //               ->references('id')->on('order_job_types');
    //               });
    // for orders
    Schema::table('orders',function(Blueprint $table){
                  $table->foreign('customer_id')
                  ->references('id')->on('users');
                  $table->foreign('sales_agent_id')
                  ->references('id')->on('users');
                  $table->foreign('job_type_id')
                  ->references('id')->on('job_types');
                  $table->foreign('cover_paper_id')
                  ->references('id')->on('cover_papers');
                  $table->foreign('inside_paper_id')
                  ->references('id')->on('inside_papers');
                  $table->foreign('size_type_id')
                  ->references('id')->on('size_types');
                  $table->foreign('lamination_type_id')
                  ->references('id')->on('lamination_types');
                  $table->foreign('binding_type_id')
                  ->references('id')->on('binding_types');
                  });

    // for invoice product table
    // Schema::table('invoices',function(Blueprint $table){
    //             $table->foreign('invoice_product_id')
    //             ->references('id')->on('invoice_products')->onDelete('cascade');
    //               });

    Schema::table('invoices',function(Blueprint $table){
                  $table->foreign('quote_id')
                  ->references('id')->on('quotations');
                  });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('migrations');
    }
}
