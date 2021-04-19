<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function products(){
        return $this->hasMany(Product::class, 'cat_id');
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model){
            $model->slug = str_slug($model->name);
        });
        self::updating(function ($model){
            $model->slug = str_slug($model->name);
        });
    }
}
