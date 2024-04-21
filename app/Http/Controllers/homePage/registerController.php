<?php

namespace App\Http\Controllers\homePage;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class registerController extends Controller
{

    public function registerPage()
    {
        return view("registerDirectory.register");
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        $request->validate([

            'name'=>'required|min:5|max:15',
            'surname'=>'required|min:5|max:15',
            'password'=>'required|min:5|max:20',
            'email'=>'email:rfc,dns',
        ]);

        $users = new User;
        $users->name = $request->name;
        $users->surname = $request->surname;
        $users->phone = $request->phone;
        $users->email = $request->email;
        $users->password = $request->password;

        $users->save();

        return view("homePage.homePage2");

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
