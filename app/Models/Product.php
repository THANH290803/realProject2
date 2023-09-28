<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'products';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'cat_id', 'brand_id', 'img', 'description', 'created_at'];

    protected $dates = ['created_at'];

    public function configurations()
    {
        return $this->hasMany(Configuration::class,'product_id');
    }

    public function specifications()
    {
        return $this->hasMany(Specification::class, 'config_id');
    }

    public function productDetails()
    {
        return $this->hasManyThrough(ProductDetail::class, Configuration::class, 'product_id', 'config_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
