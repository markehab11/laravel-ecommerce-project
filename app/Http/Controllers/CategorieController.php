<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Traits\ImageTrait;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('eshopper_dash.categories.index', compact('categories'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eshopper_dash.categories/create_categorie');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file_name = $this->saveImage($request->image, 'images/categories');
        Categorie::create([
            'name' => $request->name,
            'image' => $file_name,
            'title' => $request->title
        ]);
        return redirect()->route('Categories.index');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $products = Product::where(['categorie_id' => $id ])->get();
         return view('products_category', compact('products') );
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Categorie::findOrFail($id);
        return view('eshopper_dash.categories.edit_categorie', compact('categories')) ;
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->update([
            'name' => $request->name,
            'title' => $request->title
        ]);
            if (!isset($request->image)) {
                $categorie->update([
                    'image' => $request->old_image
                ]);
            }

            else{
                $file_name = $this->saveImage($request->image, 'images/categories');
                $categorie->update([
                    'image' => $file_name,
                ]);
            }
        return redirect()->route('Categories.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Categorie::findOrFail($id)->delete();
        return redirect()->route('Categories.index');
    }
}
