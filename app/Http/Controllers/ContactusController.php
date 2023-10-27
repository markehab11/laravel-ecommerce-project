<?php

namespace App\Http\Controllers;

use App\Models\Website_info;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function index()
    {
        $website_infos = Website_info::all();
        return view('contact', compact('website_infos'));
    }
}
