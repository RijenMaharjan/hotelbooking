<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    function customer(){
        return $this->belongsTo(Customer::class);
    }
    use HasFactory;
}
