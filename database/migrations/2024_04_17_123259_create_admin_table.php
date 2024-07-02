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
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            
            
            $table->id();
            $table->string('name')->unique();
            $table->dateTime('start_datetime'); 
            $table->unsignedBigInteger('booking_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('payment_id');
            $table->unsignedBigInteger('image_id');
            $table->unsignedBigInteger('bookingtype_id');
            $table->timestamps();
            
            //Thêm các khóa ngoại ở đây
            //$table->foreign('booking_id')->references('id')->on('booking')->onDelete('cascade');
            //$table->foreign('customer_id')->references('id')->on('customer')->onDelete('cascade');
            //$table->foreign('payment_id')->references('id')->on('payment')->onDelete('cascade');
            //$table->foreign('bookingtype_id')->references('id')->on('booking_type')->onDelete('cascade');
            //$table->foreign('image_id')->references('id')->on('image')->onDelete('cascade');
            
            
            
        
            
            
            
                                                                                                                                                                                                                                               
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
};
