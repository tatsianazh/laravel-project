<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[];
//    protected $fillable = ['name', 'slug', 'cat_id', 'title', 'price', 'active'];

    public function category(){
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function photos(){
        return $this->hasMany(Photo::class);
    }

    public function getMainPhoto(){
        $photo = $this->photos()->first();
        if($photo){
            return "/storage/".$photo->path;
        }
        return '/no_photo.jpg';
    }
}
