<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Compaign;
use App\models\Item;
use App\models\Color;
use App\models\Taille;
use App\Http\Requests\CompaignRequest;
use Illuminate\Support\Facades\Log;

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
    public function show( Request $req)
{
    /*if($req->session()->has('user'))
    {*/
        $compaigns = Compaign::where('start_date', '<=', date('Y-m-d'))
                             ->where('end_date', '>=', date('Y-m-d'))
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
        
       return  View('Admin.home', compact('compaigns', 'previousCompaigns'));    
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
            return "done";
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
