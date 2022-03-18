<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class addcart extends Model
{
    // public $items= null;
    // public $totalQty = 0;
    // public $totalPrice =0;
    // public function __construct($oldcart)
    // {
    //     if($oldcart){
    //         $this->items = $oldcart->items;
    //         $this->totalQty = $oldcart->totalQty;
    //         $this->totalPrice = $oldcart->totalPrice;
    //     }
    // }
    // public function add($item, $idsp)
    // {
    //     $cart = ['qty' => 0 , 'price' =>  $item->giasp , 'item' => $item];
    //     if($this->items){
    //         if(array_key_exists($idsp,$this->items)){
    //             $cart = $this->items[$idsp];
    //         }
    //     }
    //     $cart['qty']++;
    //     $cart['price']=$item->giasp * $cart['qty'];
    //     $this->items[$idsp]=$cart;
    //     $this->totalQty++;
    //     $this->totalPrice += $item->giasp;
    // }
    // public function delete1($idsp)
    // {
    //     $this->items[$idsp]['qty']--;
    //     $this->items[$idsp]['price']-= $this->items[$idsp]['item']['price'];;
    //     $this->totalQty--;
    //     $this->totalPrice -= $item->giasp;
    //     if($this->items[$idsp]['qty']<=0){
    //         unset($this->items[$idsp]);
    //     }
    // }
    // public function deletenhieu($idsp)
    // {
    //     $this->totalQty-=$this->items[$idsp]['qty'];
    //     $this->totalPrice-= $this->items[$idsp]['price'];
    //     unset($this->items[$idsp]);
    // }

}
