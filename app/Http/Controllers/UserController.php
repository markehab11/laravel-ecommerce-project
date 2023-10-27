<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('eshopper_dash.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eshopper_dash.users.create_users');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email'  => $request->email,
            'password' => hash::make($request->password),
            'role' => $request->role
        ]);
        return redirect()->route('Users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::findOrFail($id);
        return view('eshopper_dash.users.edit_users', compact('users')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = User::findOrFail($id);
        $users->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role
        ]);
             if (isset($request->password)) {
                 $users->update([
                'password' => hash::make($request->password)
             ]);
             }else{
                 return redirect()->route('Users.index');
             }
        return redirect()->route('Users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::findOrFail($id)->delete();
        return redirect()->route('Users.index');
    }
}
