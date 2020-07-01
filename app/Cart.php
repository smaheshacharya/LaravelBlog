<?php

namespace App;

class Cart
{
    public $items = null;
    public $TotalQtn = 0;
    public $TotalPrice = 0;

    public function __construct($OldCart)
    {
        if($OldCart)
        {
            $this->items = $OldCart->items;
            $this->TotalQtn = $OldCart->TotalQtn;
            $this->TotalPrice = $OldCart->TotalPrice;
        }
        
    }
    public function add($item, $id){
        $storedItem = ['qty' => 0, 'price' => $item->regular_price, 'item'=>$item];
        if($this->items)
        {
            if(array_key_exists($id, $this->items))
            {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->regular_price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->TotalQtn++;
        $this->TotalPrice += $item->regular_price; 
    }
}
