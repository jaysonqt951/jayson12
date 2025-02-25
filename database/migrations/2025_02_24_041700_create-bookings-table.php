<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        schema::create('bookings', function(Blueprint $table){
            $table->id();
            $table->date(column: "booking_date");
            $table->time("booking_time");
            $table->enum("status",["pending","confirmed","completed","canceled","no_show"]);
            $table->string("payment_status",50);
            $table->timestamps();


            $table->unsignedBigInteger("staff_id");
            $table->unsignedBigInteger("customer_id");
            $table->unsignedBigInteger("modifier_id");
           
            $table->foreign("modifier_id")->references("id")->on("price_modifiers")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("customer_id")->references("id")->on("customers")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("staff_id")->references("id")->on("staff")->onDelete("cascade")->onUpdate("cascade");





        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("bookings");
    }
};
