<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Gallery;
use App\User;

class Image extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'gallery_id',
    	'image',
    	'caption',
    	'title',
    	'user_id',
    ];

    /**
     * The string variable is for the table.
     *
     * @var array
     */
    protected $table = 'images';

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
     * Belonds to relationship connects both 
     * the user table and the books table
     *
     */
    public function galleries()
    {
        return $this->belongsTo(Gallery::class);
    }
}
