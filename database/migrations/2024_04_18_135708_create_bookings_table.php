<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\StyleCustomer;
use App\Enums\SocialType;
use App\Enums\StatusPayment;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->unsignedBigInteger('booking_id')->autoIncrement();
            $table->string('username');
            $table->string('image')->nullable(false)->change();
            $table->timestamp('start_datetime');
            $table->unsignedBigInteger('bookingtype_id')->nullable();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->unsignedBigInteger('img_id')->nullable();
            $table->string('contact');
            $table->string('style_customer')->default('pending'); // Thêm giá trị mặc định
            $table->string('social_type')->default('instagram');
            $table->string('status_payment')->default('Đã thanh toán');
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
    }
};
