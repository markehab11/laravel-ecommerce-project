<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Slider;
use App\Models\Website_info;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index ()
    {
        $website_infos = Website_info::all();
        $sliders = Slider::all();
        $categories = Categorie::all();
        return view('index', compact('categories','sliders','website_infos' ));
    }
}
