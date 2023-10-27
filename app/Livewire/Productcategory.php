<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;

class Productcategory extends Component
{

    public $products;

    public function render()
    {
        $this->products = Product::where(['categorie_id' => $id ])->get();
        return view('livewire.productategory');

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
