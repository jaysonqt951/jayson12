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
        schema::create('categories', function(Blueprint $table){
            $table->id();
            $table->string("name",50);
            $table->timestamps();



        });
        DB::table('categories')->insert([
            [
            'name' => "HairCut",
            ],
        ]);
        DB::table('categories')->insert([
            [
            'name' => "Rebond",
            ],
        ]);
        DB::table('categories')->insert([
            [
            'name' => "Manicure",
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("categories");
    }
};
