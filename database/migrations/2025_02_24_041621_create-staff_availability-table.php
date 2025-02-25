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
        schema::create('staff_availability', function(Blueprint $table){
            $table->id();
            $table->date("available_date");
            $table->time("start_time");
            $table->time(column: "end_time");
            $table->enum("status",["available","ongoing","unavailable"]);
            $table->timestamps();


            $table->unsignedBigInteger("staff_id");
            $table->foreign("staff_id")->references("id")->on("staff")->onDelete("cascade")->onUpdate("cascade");



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("staff_availability");
    }
};
