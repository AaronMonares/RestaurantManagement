<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'table_number', 
        'no_of_sits'
    ];

    public function booking()
    {
        return $this->hasOne(Booking::class);
    }
}
