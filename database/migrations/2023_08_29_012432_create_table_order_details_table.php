<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_order_details', function (Blueprint $table) {
            $table->id('idorderdetail');
            $table->unsignedBigInteger('idorder');
            $table->unsignedBigInteger('iditem');
            $table->foreign('idorder')->references('idorder')->on('table_orders');
            $table->foreign('iditem')->references('iditem')->on('table_items');
            $table->decimal('hargaitem', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_order_details');
    }
}
