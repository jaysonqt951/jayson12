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
        $adminId = DB::table('admin')->insert([
            [
            'fullname' => "Jayson Campion",
            'email' => "occ.campionjayson@gmail.com",
            'username' => "jaysonqt",
            'password' => Hash::make("jaysonqtqwe"),
            ],
        ]);
        $adminId = DB::table('admin')->insert([
            [
            'fullname' => "Jayson Campion",
            'email' => "occ.campionjayson@gmail.com",
            'username' => "jaysonqt",
            'password' => Hash::make("jaysonqtqwe"),
            ],
        ]);
        $adminId = DB::table('admin')->insert([
            [
            'fullname' => "Jayson Campion",
            'email' => "occ.campionjayson@gmail.com",
            'username' => "jaysonqt",
            'password' => Hash::make("jaysonqtqwe"),
            ]
            ]);
        DB::table('staff')->insert([
            [
            'fname' => "jayson campion",
            'phone_number' => "09161432985",
            'email' => "occ.campionjayson@gmail.com",
            'status' => "sideline",
            'admin_id' => $adminId
            ],
        ]);
        DB::table('staff')->insert([
            [
            'fname' => "marites campion",
            'phone_number' => "09936150541",
            'email' => "occ.maritescampion@gmail.com",
            'status' => "sideline",
            'admin_id' => $adminId
            ],
        ]);
        DB::table('staff')->insert([
            [
            'fname' => "gerald campion",
            'phone_number' => "09355169361",
            'email' => "occ.gearaldcampion@gmail.com",
            'status' => "sideline",
            'admin_id' => $adminId
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists("staff");
    }
};
