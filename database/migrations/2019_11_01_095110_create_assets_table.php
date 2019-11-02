<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('device_name');
            $table->string('vendor')->nullable();
            $table->string('product');
            $table->string('cost')->nullable();
            $table->string('serial_number');
            $table->string('date_aquired');
            $table->string('barcode')->nullable();
            $table->string('warranty')->nullable();
            $table->string('location');
            $table->string('machine_condition');
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('assets');
    }
}
