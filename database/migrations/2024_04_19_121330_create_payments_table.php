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
        Schema::create('payment', function (Blueprint $table) {
            $table->unsignedBigInteger('payment_id');
            $table->string('username');
            $table->unsignedBigInteger('bookingtype_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('image_id');
            $table->enum('style_customer',["contact(0),collab(1),pending(2),in progress(3),done(4),cancel(5)"]);
            $table->enum('social_type',["facebook(0),instagram(1),google(2),phone(3)"]);
            $table->enum('status_payment',["contact(0),collab(1),pending(2)"]);
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
        Schema::dropIfExists('payments');
    }
};
