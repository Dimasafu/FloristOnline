<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'stock',
        'price',
        'image',
    ];

    // relasi ke kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
