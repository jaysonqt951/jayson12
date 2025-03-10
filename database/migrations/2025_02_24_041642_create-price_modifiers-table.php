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
        schema::create('price_modifiers', function(Blueprint $table){
            $table->id();
            $table->string("modifier_name",255);
            $table->timestamps();
            $table->decimal("price_increase");
            $table->text("description");

            $table->unsignedBigInteger("category_id");
            $table->unsignedBigInteger("service_id");
            $table->foreign("service_id")->references("id")->on("services")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade")->onUpdate("cascade");
        });
        DB::table('price_modifiers')->insert([
            [
            'modifier_name' => "Haircut",
            'price_increase' => "100",
            'description' => "paGwapa",
            ],
        ]);
            DB::table('services')->insert([
            [
            'modifier_name' => "Haircut",
            'price_increase' => "100",
            'description' => "paGwapa",
            ],
        ]);
            DB::table('services')->insert([
            [
            'modifier_name' => "Haircut",
            'price_increase' => "100",
            'description' => "paGwapa",
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("price_modifiers");

    }
};
