<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price_modifiers extends Model
{
    use HasFactory;
    protected $table = "";
    protected $fillable = [
        "modifier_name",
        "price_increase",
        "description"
    ];
}
