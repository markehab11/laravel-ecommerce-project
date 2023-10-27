<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Traits\ImageTrait;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('eshopper_dash.sliders.index', compact('sliders'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eshopper_dash.sliders/create_slider');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file_name = $this->saveImage($request->image, 'images/sliders');
        Slider::create([
            'name' => $request->name,
            'image' => $file_name,
            'title' => $request->title
        ]);
        return redirect()->route('sliders.index');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $products = Product::where(['Slider_id' => $id ])->get();
        return view('products_category', compact('products') );
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sliders = Slider::findOrFail($id);
        return view('eshopper_dash.sliders.edit_slider', compact('sliders'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id )
    {
        $slider = Slider::findOrFail($id);
        $slider->update([
            'name' => $request->name,
            'title' => $request->title
        ]);
            if (!isset($request->image)) {
                $slider->update([
                    'image' => $request->old_image,
                ]);
            }else{
                $file_name = $this->saveImage($request->image, 'images/sliders');
                $slider->update([
                    'image' => $file_name,
                ]);
            }
        return redirect()->route('sliders.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Slider::findOrFail($id)->delete();
        return redirect()->route('sliders.index');
    }
}
