<?php
namespace App\Contracts;

/**
 * Interface BaseContract
 * @package App\Contracts
 */
interface ProductContract
{
/**
 * @param $slug
 * @return mixed
 */
public function findProductBySlug($slug);

}