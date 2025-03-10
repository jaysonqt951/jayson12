<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        schema::create('bookings', function(Blueprint $table){
            $table->id();
            $table->date("booking_date");
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
        DB::table('bookings')->insert([
            [
            'booking_date' => "03-04-2025",
            'booking_time' => "7:30AM",
            'status' => "confirmed",
            'payment_status' => "Paid"
            ],
        ]);
            DB::table('services')->insert([
            [
            'booking_date' => "03-04-2025",
            'booking_time' => "7:30AM",
            'status' => "confirmed",
            'payment_status' => "Paid"
            ],
        ]);
            DB::table('services')->insert([
            [
            'booking_date' => "03-04-2025",
            'booking_time' => "7:30AM",
            'status' => "confirmed",
            'payment_status' => "Paid"
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("bookings");
    }
};
