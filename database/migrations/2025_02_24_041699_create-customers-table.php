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
        schema::create('customers', function(Blueprint $table){
            $table->id();
            $table->string("name",255);
            $table->string("phone_number",20);
            $table->string("email",255);
            $table->timestamps();

        });
        DB::table('customers')->insert([
            [
            'name' => "lowisita Camiguin",
            'phone_number' => "09936150541",
            'email' => "occ.campionjayson@gmail.com",
            ],
        ]);
            DB::table('services')->insert([
            [
            'name' => "lowisita Camiguin",
            'phone_number' => "09936150541",
            'email' => "occ.campionjayson@gmail.com",
            ],
        ]);
            DB::table('services')->insert([
            [
            'name' => "lowisita Camiguin",
            'phone_number' => "09936150541",
            'email' => "occ.campionjayson@gmail.com",
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: "customers");

    }
};
