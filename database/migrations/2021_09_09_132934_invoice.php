<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Invoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('invoices')){
            Schema::create('invoices',function(Blueprint $table){
                $table ->bigIncrements('id');
                $table-> string('name_customer');
                $table -> text('address');
                $table -> string('phone_number');
                $table -> date('date_create_at');            
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
        // Schema::dropIfExist('invoice');
    }
}
