<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    protected $guarded = [];

    /*
     * Has many relationship to table
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * The relationship method for images
     */
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function getRouteKeyName()
    {
        return 'type';
    }

    /*
     * Image Accessor
     */
    public function getImageUrlAttribute($value)
    {
        return asset('/').'assets/img/'.$this->image->file;
    }
    public function getDefaultImgAttribute($value)
    {
        return asset('/').'assets/img/'.'user-placeholder.png';
    }
}
