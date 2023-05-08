<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Compaign;
use App\models\Item;
use App\models\Color;
use App\models\Taille;
use App\Http\Requests\CompaignRequest;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class CompaignsController extends Controller
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
            $campagne=new Compaign($req->all());
            $campagne->save();
            return redirect()->back();

        }
        catch(\Throwable $e){
            //Gerer l erreur 
            Log::debug($e);
            Log::debug($e->getMessage());

            return redirect()->back(); 

        }
    }
    public function ajouterCampagne(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after:start_date',
            'description' => 'nullable|string',
        ]);
    
        $nom = $request->input('nom');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $description = $request->input('description');
    
        // Vérifier si une campagne existe déjà pour les dates spécifiées
        $existingCampagne = Compaign::where('start_date', '<=', $end_date)
            ->where('end_date', '>=', $start_date)
            ->first();
    
        if ($existingCampagne) {
            return redirect()->back()->withErrors(['error' => 'Une campagne existe déjà pour ces dates.']);
        }
    
        // Si aucune campagne n'existe avec les mêmes dates, créer une nouvelle campagne
        $campagne = new Compaign();
        $campagne->nom = $nom;
        $campagne->start_date = $start_date;
        $campagne->end_date = $end_date;
        $campagne->description = $description;
        $campagne->save();
    
        return redirect()->back()->with('success', 'Campagne créée avec succès.');
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
    public function show( Request $req)
{
    /*if($req->session()->has('user'))
    {*/
        $compaigns = Compaign::where('start_date', '<=', date('Y-m-d'))
                             ->where('end_date', '>=', date('Y-m-d'))
                             ->where('actif','==','1')
                             ->get();

        $previousCompaigns = Compaign::where('end_date', '<=', date('Y-m-d'))
                                     ->orderBy('end_date', 'desc')
                                     ->get();

        
       return  View('Acceuil.index', compact('compaigns', 'previousCompaigns'));    
   /* }
    else
    {
        return redirect('/login');
    }*/
}
public function showA( Request $req)
{
    /*if($req->session()->has('user'))
    {*/
        $compaigns = Compaign::where('start_date', '<=', date('Y-m-d'))
                             ->where('end_date', '>=', date('Y-m-d'))
                             
                             ->get();

        $previousCompaigns = Compaign::where('end_date', '<=', date('Y-m-d'))
                                     ->orderBy('end_date', 'desc')
                                     ->get();
                                     $items = Item::all();
                                    $couleurs = Color::all();
                                    $tailles = Taille::all();
        
       return  View('Admin.home', compact('compaigns', 'previousCompaigns','items', 'couleurs', 'tailles'));    
   /* }
    else
    {
        return redirect('/login');
    }*/
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
            $campagne = Compaign::findOrFail($id);
            $campagne->nom = $request->nom;
            $campagne->start_date = $request->start_date;
            $campagne->end_date = $request->end_date;      
            $campagne ->save();
            return redirect()->back();
        }

        catch(\Throwable $e){
            //Gerer l erreur 
            Log::debug($e);
            Log::debug($e->getMessage());

            return "Fail"; 

        }
    }
    public function updateActif(Request $request, string $id)
{
    try {
        $campagne = Compaign::findOrFail($id);
        $campagne->actif = filter_var($request->actif, FILTER_VALIDATE_BOOLEAN);
        
        $campagne->save();
        
        return redirect()->back();
    }
    catch(\Throwable $e) {
        // Gérer l'erreur
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
