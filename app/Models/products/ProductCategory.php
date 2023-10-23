<?php

namespace App\Models\products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    public function parent(){
       return  $this->belongsTo(ProductCategory::class);
    }

    public function children(){
        return  $this->hasMany(ProductCategory::class, 'parent');
     }
}
