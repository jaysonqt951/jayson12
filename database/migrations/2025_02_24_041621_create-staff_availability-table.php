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
        schema::create('staff_availability', function(Blueprint $table){
            $table->id();
            $table->date("available_date");
            $table->time("start_time");
            $table->time("end_time");
            $table->enum("status",["available","ongoing","unavailable"]);
            $table->timestamps();


            $table->unsignedBigInteger("staff_id");
            $table->foreign("staff_id")->references("id")->on("staff")->onDelete("cascade")->onUpdate("cascade");
        });
        DB::table('staff_availability')->insert([
            [
            'availability_date' => "03-04-2025",
            'start_time' => "7:30AM",
            'end_time' => "4:30PM",
            'status' => "Available",
            ],
        ]);
        DB::table('services')->insert([
            [
            'availability_date' => "03-04-2025",
            'start_time' => "7:30AM",
            'end_time' => "4:30PM",
            'status' => "Available",
            ],
        ]);
        DB::table('services')->insert([
            [
            'availability_date' => "03-04-2025",
            'start_time' => "7:30AM",
            'end_time' => "4:30PM",
            'status' => "Available",
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("staff_availability");
    }
};
