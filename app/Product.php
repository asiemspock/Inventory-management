<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'category_id', 'price'];
    public function category(){
        return $this->belongsTo(\App\Category::class);
    }
    public function tags()
    {
        return $this->belongsToMany(\App\Tag::class, 'product_tag', 'product_id', 'tag_id');
    }
}
