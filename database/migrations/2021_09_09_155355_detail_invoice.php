<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailInvoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('detail_invoices')){
            Schema::create('detail_invoices',function(Blueprint $table){
                $table ->bigInteger('product_id');
                $table ->bigInteger('invoice_id');
                $table -> primary(['product_id', 'invoice_id']);
                $table -> bigInteger('number');
                $table->foreign('product_id')->references('id')->on('products');  
                $table->foreign('invoice_id')->references('id')->on('invoices');  
     
            });
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Shema::dropIfExists('detail_invoices');
    }
}
