<?php

namespace App\Livewire;

use App\Models\Cart as cart;
use Livewire\Component;

class Cartcheckout extends Component
{
    public $count = 0 , $carts, $sub_total = 0, $total = 0, $tax = 10, $products ;

    protected $listeners = ['updateCartCount' => 'getCount' ];

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

        return view('livewire.cartcheckout');
    }
}
