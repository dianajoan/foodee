<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Image;
use App\User;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','description','previous_price', 'imagePath',
        'current_price','categories_id','user_id','status'
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
}
