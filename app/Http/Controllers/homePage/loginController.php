<?php

namespace App\Http\Controllers\homePage;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{


    public function loginPage()
    {
        return view("loginPanel.login");

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
        // Kullanıcı giriş yapmışsa
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Kullanıcı başarılı bir şekilde giriş yaptıysa
            return view("todoListPageDirectory.todoList");
        } else {
            // Kullanıcı giriş yapamadıysa, hata mesajı gösterebilirsiniz veya giriş sayfasına geri yönlendirebilirsiniz.
            return view("loginPanel.login")->with('error', 'Kullanıcı adı veya şifre hatalı');
        }
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
