<?php

namespace App\Livewire;

use App\Models\Cart as cart;
use Livewire\Component;

class Shoppingcart extends Component
{
    public $carts, $sub_total = 0, $total = 0, $tax = 10;

    public function render()
    {
        $this->carts = Cart::with('product')
                    ->where(['user_id' => '1'])
                    ->get();

        $this->total= 0; $this->sub_total= 0; $this->tax= 10;

        foreach ($this->carts as $item)
        {
            $this->sub_total += $item->product->price * $item->quantity;
        };
        $this->total = $this->sub_total + $this->tax;

        return view('livewire.shoppingcart');
    }


    public function increment($id)
    {
        $cartQ = Cart::whereId($id)->first();
        $cartQ->quantity += 1;
        $cartQ->save();
        session()->flash('success', 'product quantity updated');
    }

    public function decrement($id)
    {
        $cartQ = Cart::whereId($id)->first();
        if($cartQ->quantity > 1){
            $cartQ->quantity -= 1;
            $cartQ->save();
            session()->flash('success', 'product quantity updated');

        }else{
            session()->flash('info', 'you cannot have less than 1 quantity');
        };
    }
    public function remove($id)
    {
        $cartRemove =Cart::whereId($id)->first();

        if ($cartRemove)
        {
            $cartRemove->delete();
        }
        session()->flash('success', 'product removed from cart');
    }
}
