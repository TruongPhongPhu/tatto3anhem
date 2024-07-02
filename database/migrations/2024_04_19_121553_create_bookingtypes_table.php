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
        Schema::create('bookingtype', function (Blueprint $table) {
            $table->unsignedBigInteger('bookingtype_id')->autoIncrement();;
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->timestamp('datetime');
            $table->unsignedBigInteger('booking_id')->nullable();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->unsignedBigInteger('img_id')->nullable();
            $table->string('service')->default('Tattoo');
            $table->string('message');
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
        Schema::dropIfExists('bookingtypes');
    }
};
