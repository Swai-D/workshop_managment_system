<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date_in');
            $table->string('type_of_machine');
            $table->string('serial_number');
            $table->string('location');
            $table->string('department');
            $table->string('user_email');
            $table->string('phone');
            $table->string('bar_code');
            $table->string('ticket_number')->nullable();
            $table->string('office_phone')->nullable();
            $table->string('remark')->nullable();

            $table->string('item_id')->default('In progress');
            $table->string('date_out')->default('In progress');
            $table->string('collected_by')->default('In progress');
           
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
        Schema::dropIfExists('stores');
    }
}
