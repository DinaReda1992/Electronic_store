<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Product;
use app\Models\Company;
use app\Models\Subcategory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['category_name','company_id'];

    public function products(){
        return $this->hasmany(Product::class);
    }
    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
