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
        schema::create('services', function(Blueprint $table){
            $table->id();
            $table->string("service_name",255);
            $table->text("description");
            $table->decimal("price");
            $table->time("duration");
            $table->enum("status",["active","inactive"]);
            $table->string("image_path");
            $table->timestamps();
    
            
            $table->unsignedBigInteger("category_id");
            $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade")->onUpdate("cascade");




        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("services");
    }
};
