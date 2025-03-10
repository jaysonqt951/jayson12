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
        DB::table('services')->insert([
            [
            'service_name' => "HairCut",
            'description' => "paGwapa",
            'price' => "70",
            'duration' => "07:00:00",
            'status' => "Active",
            'image_path' => "Haircut"

            ],
        ]);
        DB::table('services')->insert([
            [
            'service_name' => "Rebond",
            'description' => "paGwapa",
            'price' => "70",
            'duration' => "09:00:00",
            'status' => "Inactive",
            'image_path' => "Rebond"

            ],
        ]);
        DB::table('services')->insert([
            [
            'service_name' => "Manicure",
            'description' => "paGwapa",
            'price' => "70",
            'duration' => "11:00:00",
            'status' => "Active",
            'image_path' => "Manicure"

            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("services");
    }
};
