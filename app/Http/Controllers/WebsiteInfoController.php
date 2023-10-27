<?php

namespace App\Http\Controllers;

use App\Models\Website_info;
use Illuminate\Http\Request;

class WebsiteInfoController extends Controller
{
    /**  
     * Display a listing of the resource.
     */
    public function index()
    {
        $website_infos = Website_info::all();
        return view('eshopper_dash.website_infos.index', compact('website_infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eshopper_dash.website_infos/create_website_info');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Website_info::create([
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'facebook' => $request->facebook,
            'twiter' => $request->twiter,
            'instgram' => $request->instgram,
            'youtube' => $request->youtube,
        ]);
        return redirect()->route('website_infos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Website_info $website_info)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Website_infos = Website_info::findOrFail($id);
        return view('eshopper_dash.website_infos/edit_website_info', compact('Website_infos')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id )
    {
        $Website_info = Website_info::findOrFail($id);
        $Website_info->update([
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'facebook' => $request->facebook,
            'twiter' => $request->twiter,
            'instgram' => $request->instgram,
            'youtube' => $request->youtube,
        ]);
        return redirect()->route('website_infos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Website_info::findOrFail($id)->delete();
        return redirect()->route('website_infos.index');
    }
}
