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
        schema::create('staff', function(Blueprint $table){
            $table->id();
            $table->string("fullname",255);
            $table->string("phone_number",15)->unique();
            $table->string("email",255)->unique();
            $table->string("status", ["active","inactive"], 20);
            $table->timestamps();

            $table->unsignedBigInteger("admin_id");
            $table->foreign("admin_id")->references("id")->on("admin")->onDelete("cascade")->onUpdate("cascade");


        });
        $adminId = DB::table('admin')->insert([
            [
            'fullname' => "Jayson Campion",
            'phone_number' => '09161432985',
            'email' => "occ.campionjayson@gmail.com",
            'status' => 'active',

            ],
        ]);
        $adminId = DB::table('admin')->insert([
            [
                'fullname' => "Gerald Campion",
                'phone_number' => '09355169361',
                'email' => "exortmiracle.1@gmail.com",
                'status' => 'active',
            ],
        ]);
        $adminId = DB::table('admin')->insert([
            [
                'fullname' => "Marites Campion",
                'phone_number' => '09531684945',
                'email' => "occ.maritescampion@gmail.com",
                'status' => 'active',
            ]
            ]);
        DB::table('staff')->insert([
            [
            'fname' => "jayson campion",
            'phone_number' => "09161432985",
            'email' => "occ.campionjayson@gmail.com",
            'status' => "active",
            'admin_id' => $adminId
            ],
        ]);
        DB::table('staff')->insert([
            [
            'fname' => "Gerald campion",
            'phone_number' => "09355169361",
            'email' => "exortmiracle.1@gmail.com",
            'status' => "active",
            'admin_id' => $adminId
            ],
        ]);
        DB::table('staff')->insert([
            [
            'fname' => "Marites campion",
            'phone_number' => "09531684945",
            'email' => "occ.maritescampion@gmail.com",
            'status' => "active",
            'admin_id' => $adminId
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("staff");
    }
};
