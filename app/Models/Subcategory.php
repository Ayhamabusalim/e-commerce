<?php

namespace App\Models;
use App\Models\Category;
use App\Models\Product;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable=['name','category_id'];

   public function subcategory()
{
    return $this->hasMany(Product::class);
}
    public function category()
{
    return $this->belongsTo(Category::class);
}

}
