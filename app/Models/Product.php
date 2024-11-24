<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=["title","slug","description","stock","price","old_price","image","cat","category_id"];

    public function getRouteKey()
    {
        return "slug";
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
   
    public function paniers()
    {
        return $this->hasMany(Panier::class, 'products_id');
    }


}
