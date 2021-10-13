<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        if(!Schema::hasTable('products')){
            Schema::create('products',function(Blueprint $table){
                $table ->bigIncrements('id');
                $table-> string('name_product');
                $table -> decimal('price',10,1)->default('0');
                $table ->text('description');
                $table ->bigInteger('discount');
                $table ->text('image');
                $table ->char('unit', 50);
                $table ->bigInteger('quantity');
                $table -> bigInteger('type_product_id');
                $table->foreign('type_product_id')->references('id')->on('type_products');
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
        // Schema::dropIfExists('products');
    }
}
