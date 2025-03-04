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
        schema::create('admin', function(Blueprint $table){
            $table->id();
            $table->string("fullname",50);
            $table->string("email",100);
            $table->string("username",50);
            $table->string("password", 255);
            $table->timestamp("registration_date")->useCurrent();
            $table->timestamps();

            
           
        });
        DB::table('admin')->insert([
            [
            'fullname' => "Jayson Campion",
            'email' => "occ.campionjayson@gmail.com",
            'username' => "jaysonqt",
            'password' => Hash::make("jaysonqtqwe"),
            ],
        ]);
            DB::table('admin')->insert([
            [
            'fullname' => "Jayson Campion",
            'email' => "occ.campionjayson@gmail.com",
            'username' => "jaysonqt",
            'password' => Hash::make("jaysonqtqwe"),
            ],
        ]);
        DB::table('admin')->insert([
            [
            'fullname' => "Jayson Campion",
            'email' => "occ.campionjayson@gmail.com",
            'username' => "jaysonqt",
            'password' => Hash::make("jaysonqtqwe"),
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("admin");
    }
};
