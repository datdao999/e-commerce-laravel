<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TypeProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('type_products')){
            echo Schema::hasTable('type_products');
            Schema::create('type_products',function(Blueprint $table){
                $table ->bigIncrements('id');
                $table-> string('name_type_product');
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
        //
    }
}
