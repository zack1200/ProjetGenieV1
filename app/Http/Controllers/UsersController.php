<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    //debut
    function login(Request $req)
    {
        $req->validate([
            'email'=>'required',           
            'password'=>'required',
        ]); 
        $user =user::where(['email'=>$req->email])->first();
        if(! $user || ! Hash::check($req->password,$user->password))
        {
            return redirect('/login');
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
//fin
//debut
    function register(Request $req)
    {   
        $req->validate([
            'email'=>'required|unique:users',
            'nom'=>'required',
            'password'=>'required',
        ]);       
            $users = new user ;
            $users->nom=$req->nom;
            $users->email=$req->email;            
            $users->password= Hash::make($req->password);
            $users->role=$req->role;
            $users->save();
             return redirect('/login');
    }
//fin

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
