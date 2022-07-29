<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'name', 
        'product_description', 
        'price', 
        'image_path', 
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function meals()
    {
        return $this->belongsToMany(Meal::class);
    } 
}
