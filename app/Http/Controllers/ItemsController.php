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
            $item->save();
            try{
                $compaign = Compaign::find($request->compaign_id);
            $item->compaigns()->attach($compaign);    
            $item->save();
            }
            catch (\Throwable $e){
                Log::debug($e);
                return "relation failed ";
            }

            return "ok";
        }
            


         catch(\Throwable $e) {
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
    public function show(Request $request)
{
    try {
        $items = Item::all(); // récupère toutes les données de la table items
        return view('Admin.AjouterCompagne', compact('items')); 

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
        try{
            $item = Item::findOrFail($id);
            $item->nom = $request->nom;
            $item->max_items = $request->max_items;
            
            $uploadedFile = $request->file('img');
            
            $nomFichierUnique = md5(str_replace(' ', '_', $item->nom) . '-' . time()) . '.' . $uploadedFile->extension();

        try {
            $request->img->move(public_path('/img/model'), $nomFichierUnique);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e) {
            Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }
            
        $item->mookup = $nomFichierUnique;
        $item ->save();  
              
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
        try{
            Item::destroy($id);
            return "supprimer ";

        }
        catch(\Throwable $e){
            //Gerer l erreur 
            Log::debug($e);
            Log::debug($e->getMessage());

            return "Fail"; 

        }

    }
}
