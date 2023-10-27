<?php

namespace App\Http\Controllers;
use App\Models\Color;
use App\Models\ProductImage;
use App\Models\Size;
use App\Models\Slider;
use App\Traits\ImageTrait;
use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('eshopper_dash.products.index', compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colors = Color::all();
        $sizes = Size::all();
        $categories = Categorie::all();
        $sliders = Slider::all();
        return view('eshopper_dash.products.create_product',compact('categories' ,'colors' , 'sizes', 'sliders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file_name = $this->saveImage($request->image, 'images/products');
        Product::create([
            'name' => $request->name,
            'image' => $file_name,
            'title' => $request->title,
            'description' => $request->description,
            'categorie_id' => $request->categorie_id,
            'slider_id' => $request->slider_id,
            'price' => $request->price,
            'descount' => $request->descount,
            'quantity' => $request->quantity
        ]);
        return redirect()->route('Products.index');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);
        $reviews = $product->review;
        $colors = Color::where(['product_id' => $id ])->get();
        $sizes = Size::where(['product_id' => $id ])->get();
        $product_images = ProductImage::where(['product_id' => $id ])->get();
        return view('detail', compact('product', 'reviews', 'product_images','colors','sizes'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $colors = Color::all();
        $sizes = Size::all();
        $categories = Categorie::all();
        $sliders = Slider::all();
        $products = Product::findOrFail($id);
        return view('eshopper_dash.products.edit_product', compact('products', 'categories','colors' , 'sizes','sliders')) ;
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'categorie_id' => $request->categorie_id,
            'slider_id' => $request->slider_id,
            'price' => $request->price,
            'descount' => $request->descount,
            'quantity' => $request->quantity
        ]);
            if (!isset($request->image)) {
                $product->update([
                    'image' => $request->old_image
                ]);
            }else{
                $file_name = $this->saveImage($request->image, 'images/products');
                $product->update([
                    'image' => $file_name
                ]);
            }
        return redirect()->route('Products.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('Products.index');
    }
}
