<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff_availability extends Model
{
    use HasFactory;
    protected $table = "staff_availability";
    protected $fillable = [
        "available_date",
        "start_time",
        "end_time",
        "status"
    ];
}
