<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Compaign;
use App\models\Item;
use Illuminate\Support\Facades\Log;

class ItemsController extends Controller
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
    public function create(Request $request)
    {
        try {
            $item = new Item();
            $item->nom = $request->nom;
            $item->max_items = $request->max_items;
            $item->mookup = $request->mookup;
            $item->actif = filter_var($request->actif, FILTER_VALIDATE_BOOLEAN);
    
            $compaign = Compaign::find($request->compaign_id);
            $item->campaigns()->attach($compaign);
    
            $item->save();
        } catch(\Throwable $e) {
            // Gérer l'erreur 
            Log::debug($e);
            Log::debug($e->getMessage());
    
            return "Fail"; 
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
        try{
            $item = Item::findOrFail($id);
            $item->nom = $request->nom;
            $item->max_items = $request->max_items;
            $item->mookup = $request->mookup;   
              
            $item->actif = filter_var($request->actif, FILTER_VALIDATE_BOOLEAN);
            $item ->save();
            return redirect('/home');
        }

        catch(\Throwable $e){
            //Gerer l erreur 
            Log::debug($e);
            Log::debug($e->getMessage());

            return "Fail"; 

        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
