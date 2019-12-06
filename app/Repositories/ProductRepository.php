<?php

namespace App\Repositories;

use App\Contracts\ProductContract;
use App\Models\Product;
/**
 * Class BaseRepository
 *
 * @package \App\Repositories
 */
class ProductRepository implements ProductContract
{
	/**
 * @param $slug
 * @return mixed
 */
	public function findProductBySlug($slug)
	{
	    $product = Product::where('slug', $slug)->first();

	    return $product;
	}
}