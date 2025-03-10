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

    public function customer()
    {
        return $this->belongsTo(Customers::class, "customer_id", "customer_id");
    }

    public function services()
    {
        return $this->hasMany(Bookings::class, "booking_id", "booking_id");
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class, "staff_id", "staff_id");
    }
}
