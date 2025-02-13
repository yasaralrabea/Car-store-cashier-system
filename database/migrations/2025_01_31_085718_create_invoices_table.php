<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 

     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('price');
            $table->integer('amount_received');
            $table->integer('amount_returned');
            $table->integer('car_code');
            $table->date('invoice_date');
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade'); // مفتاح أجنبي
            $table->string('payment_method');
            $table->string('payment_status');
            $table->string('payment_system');
            $table->integer('Deferred');

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
        Schema::dropIfExists('invoices');
    }
};
