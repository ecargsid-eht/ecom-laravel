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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained();
            $table->boolean("ordered")->default(0);
            $table->foreignId("coupon_id")->constrained();
            $table->foreignId("address_id")->constrained();
            $table->boolean("is_delivered")->default(0);
            $table->boolean("is_processing")->default(0);
            $table->boolean("is_shipped")->default(0);
            $table->date("day_of_order");
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
        Schema::dropIfExists('orders');
    }
};
