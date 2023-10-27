<?php

namespace App\Livewire;

use App\Models\Cart as cart;
use Livewire\Component;

class Cartcounter extends Component
{
    public $count = 0 , $carts, $sub_total = 0, $total = 0, $tax = 0;

    protected $listeners = ['updateCartCount' => 'getCount' ];

    public function render()
    {
        $this->getCount();

        $this->carts = Cart::with('product')
            ->where(['user_id' => '1'])
            ->get();

        $this->total= 0; $this->sub_total= 0; $this->tax= 0;

        foreach ($this->carts as $item)
        {
            $this->sub_total += $item->product->price * $item->quantity;
        };
        $this->total = $this->sub_total + $this->tax;

        return view('livewire.cartcounter');
    }
     public function getCount ()
     {
         $this->count = Cart::whereUserId(1)->count();
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
//            $this->emit('updateCartCount');
        }
        session()->flash('success', 'product removed from cart');
    }
}
