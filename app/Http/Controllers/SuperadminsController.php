<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Superadmin;

class SuperadminsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View 
     */
    public function index()
    {
        //C'est le contrôleur qui interroge la BD et passe les informations à la vue.
        $superadmins = Superadmin::all();

        return View('Superadmin.index');
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
    public function edit($id)
    {
        //
        $superadmins = Superadmin::findOrFail($id);
        return view('Superadmin.edit');
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
