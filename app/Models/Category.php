<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Product;
use App\User;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','display_name','description',
        'categories_id','user_id','type'
    ];

    /**
     * The string variable is for the table.
     *
     * @var array
     */
    protected $table = 'categories';

    /*
     * belongs to table
     */
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    /*
     * belongs to table
     */
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    /*
     * Has many relationship to table
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    /*
     * Has many relationship to table
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
