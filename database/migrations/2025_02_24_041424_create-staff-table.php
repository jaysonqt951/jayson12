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
        schema::create('staff', function(Blueprint $table){
            $table->id();
            $table->string("fname",255);
            $table->string("phone_number",15)->unique();
            $table->string("email",255)->unique();
            $table->string("status",20);
            $table->timestamps();

            $table->unsignedBigInteger("admin_id");
            $table->foreign("admin_id")->references("id")->on("admin")->onDelete("cascade")->onUpdate("cascade");


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists("staff");
    }
};
