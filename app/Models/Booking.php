<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'time', 
        'date', 
        'number_of_guests', 
        'message', 
        'customer_name', 
        'contact_number', 
        'table_id'
    ];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}
