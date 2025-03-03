<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;
    protected $table = "bookings";
    protected $fillable = [
        "booking_date",
        "booking_time",
        "status",
        "payment_status"
    ];
}
