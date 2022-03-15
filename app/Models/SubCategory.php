<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Category;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = ['sub_category_name','category_id'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    Public function product()
    {
        return $this->hasMany(Product::class);
    }
}
