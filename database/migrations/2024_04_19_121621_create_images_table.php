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
        Schema::create('image', function (Blueprint $table) {
            $table->unsignedBigInteger('image_id');
            $table->string('username');
            $table->unsignedBigInteger('customer_id');
            $table->enum('img_type',["png(0),jpg(1),gif(2)"]);
            $table->enum('style_customer',["contact(0),collab(1),pending(2),in progress(3),done(4),cancel(5)"]);
            $table->enum('customer_type',["vãng lai(0), vẽ tranh(1), vẽ xăm(2)"]);
            $table->enum('status_payment',["contact(0),collab(1),pending(2)"]);
            $table->string('name_img');
            $table->dateTime('start_datetime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
};
