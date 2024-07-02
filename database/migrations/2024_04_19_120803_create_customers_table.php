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
        Schema::create('customer', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_id')->autoIncrement();
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->string('gender');
            $table->string('phone');
            $table->enum('style_customer',["contact(0),collab(1),pending(2),in progress(3),done(4),cancel(5)"]);
            $table->enum('social_type',["facebook(0),instagram(1),google(2),phone(3)"]);
            $table->enum('status_type',["cọc(0),tiền thanh toán còn lại(1),đã thanh toán(2),hủy(3)"]);
            $table->enum('customer_type',["vãng lai(0), vẽ tranh(1), vẽ xăm(2)"]);
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
        Schema::dropIfExists('customers');
    }
};
