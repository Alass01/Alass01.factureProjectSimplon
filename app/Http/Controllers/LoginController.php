<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function login(Request $request){

        $credentials = $request->only(['email', 'password']);
        if (auth()->attempt($credentials)){
            $user = auth()->user();
            if ($user->name == "Hello"){
                return view("manager.index");
            }
            else{
                return view('dashboard');
            }
        }
    }

    public function register(Request $request){

        $request->validate([
            'name'=> ['required', 'string', 'max:255'],
            'lastname'=> ['required', 'string', 'max:255'],
            'email'=> ['required', 'email', 'unique:users'],
            'password'=> ['required', 'string', 'min:8'],
            'country'=> ['required', 'string', 'min:2'],
            'company'=> ['required', 'string', 'max:255'],
            'phone'=> ['required', 'string', 'min:10'],
        ]);

        $user = new User();

        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->password = bcrypt($request->input('password'));
        $user->phone = $request->input('phone');
        $user->country = $request->input('country');
        $user->email = $request->input('email');
        $user->company = $request->input('company');

        $user->save();
        return redirect()->back()->with(['succes'=>'inscription succes']);


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
        //
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
