<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'stock', 'sub_category_id'];
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
