<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking_services extends Model
{
    use HasFactory;
    protected $table = "booking_services";
    protected $fillable = [
        "start_time", 
        "end_time", 
        "price"
    ];
}
