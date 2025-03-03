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
        schema::create('booking_services', function(Blueprint $table){
           
            $table->id();
            $table->time(column: "start_time");
            $table->time("end_time");
            $table->decimal("price");
            $table->timestamps();

            $table->unsignedBigInteger("services_id");
            $table->unsignedBigInteger("staff_id");
            $table->unsignedBigInteger("booking_id");
            
            $table->foreign("booking_id")->references("id")->on("bookings")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("services_id")->references("id")->on("services")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("staff_id")->references("id")->on("staff")->onDelete("cascade")->onUpdate("cascade");
        });
        DB::table('bookings_services')->insert([
            [
            'start_time' => "7:30AM",
            'end_time' => "4:30PM",
            'price' => "70",
            ],
        ]);
            DB::table('services')->insert([
            [
            'start_time' => "7:30AM",
            'end_time' => "4:30PM",
            'price' => "70",
            ],
        ]);
            DB::table('services')->insert([
            [
            'start_time' => "7:30AM",
            'end_time' => "4:30PM",
            'price' => "70",
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("booking_services");

    }
};
