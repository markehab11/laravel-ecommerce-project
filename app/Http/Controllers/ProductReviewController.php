<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ProductReview;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $product_reciews = ProductReview::all();
        return view('eshopper_dash.product_reviews.index', compact('product_reciews', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ProductReview::create([
            'product_id' => $request->product_id ,
            'review_text' => $request->review_text,
            'name' => $request->name,
            'email' =>$request->email,

        ]);
        return response()->json(['message' => 'Review added successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductReview $productReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductReview $productReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductReview $productReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ProductReview::findOrFail($id)->delete();
        return redirect()->route('productReview.index');
    }
}
