<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Log;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('SuperAdmin/home', compact('users'));
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
            $users->save();
             return redirect('/login');
    }
//fin

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('SuperAdmin.createAdmin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        try {
            $user = new User($request->all());
            $user->save();
        }

        catch (\Throwable $e) {
            //Gerer erreur
            Log::debug($e);
        }
        return redirect()->route('SuperAdmin/home');
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
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $user = User::findOrFail($id);

            $user->delete();

           return redirect()->route('SuperAdmin/home')->with('message', "Suppression de usager numéro " . $user->id . " réussie"); 
        }
        catch(\Throwable $e) {
            Log::debug($e);
           return redirect()->route('SuperAdmin/home')->withErrors(['Suppression echouée']);
        }
            return redirect()->route('SuperAdmin/home');
    }
}
