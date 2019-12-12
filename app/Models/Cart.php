<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart) {
        if($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public  function add($item, $id) {
        $storedItem = ['qty' => 0, 'current_price' => $item->current_price, 'item' => $item];
        if($this->items) {
            if(array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['current_price'] = $item->current_price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->current_price;
    }

    public function removeItem($id) {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['current_price'];
        unset($this->items[$id]);
    }
}
