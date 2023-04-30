<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Item;
use App\models\Color;
use Illuminate\Support\Facades\Log;

class ColorsController extends Controller
{
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
    public function create(Request $req)
    {
        try{
            $color = new Color($req ->all());
            $color->save();
        }
        catch (\Throwable $e){
            Log::debug($e);
            return "relation failed ";
        }
        
        

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
    public function show(Request $request)
    {
        try {
            $color = Color::all(); // récupère toutes les données de la table items
            return view('Admin.AjouterCompagne', compact('colors')); 
    
        } catch (\Throwable $e) {
            //Gérer l'erreur 
            Log::debug($e);
            Log::debug($e->getMessage());
            return "Fail";
        }
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
