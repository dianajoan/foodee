<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Image as GalleryImage;
use App\Models\Product;
use App\User;

class Gallery extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
    	'gallery_name',
    	'description',
    	'gallery_id',
    	'image',
    	'title',
    	'user_id',
        'status'
    ];

    /**
     * The string variable is for the table.
     *
     * @var array
     */
    protected $table = 'galleries';

    /**
     * Belonds to relationship connects both 
     * the user table and the books table
     *
     */
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The relationship method for images
     */
    public function images()
    {
        return $this->hasMany(GalleryImage::class);
    }

    /**
     * Belonds to relationship connects both 
     * the user table and the books table
     *
     */
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
