<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;

class Lastproducts extends Component
{

    public $products;

    public function render()
    {
        $this->products = Product::limit(8)->get();
        return view('livewire.lastproducts');
    }

    public function addToCart($id){

    if(auth()->user()){

        $data = [
            'user_id' => auth()->user()->id,
            'product_id' => $id
        ];
        Cart::updateOrCreate($data);
        session()->flash('success', 'Product Added To Cart Successfully');

        }else{
            return redirect(route('login'));
        }

    }
}
