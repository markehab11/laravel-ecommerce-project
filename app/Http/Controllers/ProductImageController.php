<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ProductImage;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $ProductImages = ProductImage::all();
        return view('eshopper_dash.product_images.index', compact('ProductImages', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('eshopper_dash.product_images.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filename_1 = $this->saveImage_1($request->filename_1, 'images/products');
        $filename_2 = $this->saveImage_2($request->filename_2, 'images/products');
        $filename_3 = $this->saveImage_3($request->filename_3, 'images/products');
        $filename_4 = $this->saveImage_4($request->filename_4, 'images/products');

        ProductImage::create([
            'product_id' => $request->product_id,
            'filename_1' => $filename_1,
            'filename_2' => $filename_2,
            'filename_3' => $filename_3,
            'filename_4' => $filename_4

        ]);
        return redirect()->route('productImage.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductImage $productImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $products = Product::all();
        $product_images = ProductImage::findOrFail($id);
        return view('eshopper_dash.product_images.edit', compact('products', 'product_images')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product_images = ProductImage::findOrFail($id);

        if (!isset($request->filename_1)) {
            $product_images->update([
                'filename_1' => $request->old_image_1
            ]);
        }else{
            $filename_1 = $this->saveImage_1($request->filename_1, 'images/products');
            $product_images->update([
                'filename_1' => $filename_1
            ]);
        }


        if (!isset($request->filename_2)) {
            $product_images->update([
                'filename_2' => $request->old_image_2
            ]);
        }else{
            $filename_2 = $this->saveImage_1($request->filename_2, 'images/products');
            $product_images->update([
                'filename_2' => $filename_2
            ]);
        }

        if (!isset($request->filename_3)) {
            $product_images->update([
                'filename_3' => $request->old_image_3
            ]);
        }else{
            $filename_3 = $this->saveImage_1($request->filename_3, 'images/products');
            $product_images->update([
                'filename_3' => $filename_3
            ]);
        }

        if (!isset($request->filename_4)) {
            $product_images->update([
                'filename_4' => $request->old_image_4
            ]);
        }else{
            $filename_4 = $this->saveImage_1($request->filename_4, 'images/products');
            $product_images->update([
                'filename_4' => $filename_4
            ]);
        }
        return redirect()->route('productImage.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ProductImage::findOrFail($id)->delete();
        return redirect()->route('productImage.index');
    }
}
