<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Categorie;

class Find extends Component
{
    public $searchQuery;
    public $results = [];

    public function render()
    {
        return view('livewire.find');
    }

    public function search()
    {
        $this->results = [];

        if ($this->searchQuery) {
            $products = Product::where('name', 'like', '%' . $this->searchQuery . '%')->get();
            $categories = Categorie::where('name', 'like', '%' . $this->searchQuery . '%')->get();

            $this->results = [
                'products' => $products,
                'categories' => $categories,
            ];
        }
    }
}
