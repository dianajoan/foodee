<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Image;
use App\Models\Farmer;
use App\User;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','description','previous_price', 'imagePath', 'farmer_id', 'image_id',
        'quantity', 'discount_rate', 'current_price','categories_id','user_id','status'
    ];

    /**
     * The string variable is for the table.
     *
     * @var array
     */
    protected $table = 'products';

    /*
     * belongs to table
     */
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    /*
     * belongs to table
     */
    public function farmer()
    {
        return $this->belongsTo(Farmer::class);
    }

    /*
     * has many images
     */
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    /*
     * belongs to table
     */
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('id', 'desc');
    }

    /*
     * Scope for search books
     */
    public function scopeSearch($query, $term)
    {
        if($term)
        {
            $query->where(function ($q) use ($term){
                $q->where('title', 'LIKE', "%{$term}%");

                $q->orwhereHas('author', function ($qr) use ($term){
                    $qr->where('name', 'LIKE', "%{$term}%");
                });
            });
        }
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
