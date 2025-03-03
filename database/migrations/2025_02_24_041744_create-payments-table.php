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
        schema::create('payments', function(Blueprint $table){
            $table->id();
            $table->decimal("amount");
            $table->string("payment_method",50);
            $table->string(column: "payment_status");
            $table->timestamp(column: "payment_date");
            $table->timestamps();

            $table->unsignedBigInteger("booking_id");
            $table->foreign("booking_id")->references("id")->on("bookings")->onDelete("cascade")->onUpdate("cascade");
        });
        DB::table('bookings_services')->insert([
            [
            'amount' => "70",
            'payment_method' => "GCash",
            'payment_status' => "Paid",
            'payment_date' => "03-04-2025",
            ],
        ]);
            DB::table('services')->insert([
            [
            'amount' => "70",
            'payment_method' => "GCash",
            'payment_status' => "Paid",
            'payment_date' => "03-04-2025",
            ],
        ]);
            DB::table('services')->insert([
            [
            'amount' => "70",
            'payment_method' => "GCash",
            'payment_status' => "Paid",
            'payment_date' => "03-04-2025",
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("payments");

    }
};
