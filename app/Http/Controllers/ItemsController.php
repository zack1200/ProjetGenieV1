<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\models\Compaign;
use App\models\Item;
use App\models\Color;
use App\models\Taille;
use App\models\Cart;
use App\models\Order;
use App\models\User;

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
            $uploadedFile = $request->file('mookup');
            if ($uploadedFile) {
                $nomFichierUnique = str_replace(' ', '_', $item->nom) . '-' . uniqid() . '.' . $uploadedFile->extension();
                try {
                    $uploadedFile->move(public_path('img/model'), $nomFichierUnique);
                } catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e) {
                    Log::error("Erreur lors du téléversement du fichier. ", [$e]);
                }
                $item->mookup = $nomFichierUnique;
            }
            
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

            return redirect()->back();
        }
            


         catch(\Throwable $e) {
            // Gérer l'erreur 
            Log::debug($e);
            Log::debug($e->getMessage());
    
            return "Fail"; 
        }
    }

    public function createCampagneItemColorSize(Request $request)
{
    try {
        $compaign = Compaign::find($request->compaign_id);
        $item = Item::find($request->item_id);
        $colors = $request->input('couleur', []);
        $tailles = $request->input('taille', []);
        $item->compaigns()->attach($compaign);
        $item->color()->attach($colors);
        $item->taille()->attach($tailles);
        $item->max_items = $request->max_items;
        $item->save();

        return redirect()->back();
    } catch (\Throwable $e) {
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
        $items = Item::all();
        $colors = Color::all(); // récupère toutes les données de la table items
            
        return view('Admin.AjouterCompagne', compact('items','colors')); 

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
            

            $uploadedFile = $request->file('mookup');
            if ($uploadedFile) {
                $nomFichierUnique = str_replace(' ', '_', $item->nom) . '-' . uniqid() . '.' . $uploadedFile->extension();
                try {
                    $uploadedFile->move(public_path('img/model'), $nomFichierUnique);
                } catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e) {
                    Log::error("Erreur lors du téléversement du fichier. ", [$e]);
                }
                $item->mookup = $nomFichierUnique;
            }
            
        $item ->save();  
              
            $item->actif = filter_var($request->actif, FILTER_VALIDATE_BOOLEAN);
            $item ->save();
            return redirect()->back();
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
            return redirect()->back();

        }
        catch(\Throwable $e){
            //Gerer l erreur 
            Log::debug($e);
            Log::debug($e->getMessage());

            return "Fail"; 

        }

    }
    public function detacher(string $id,Request $request)
{
    try{
        $item = Item::findOrFail($id);
        $compaign = Compaign::find($request->compaign_id);
        
        $item->compaigns()->detach($compaign);

        return redirect()->back();

    }
    catch(\Throwable $e){
        //Gérer l'erreur 
        Log::debug($e);
        Log::debug($e->getMessage());

        return "Fail"; 

    }
}
public function addToCart(Request $req)
{
    try{
        if ($req->session()->has('user'))
    {
            
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->item_id = $req->item_id;
            $cart->color_id = $req->color_id;
            $cart->taille_id = $req->taille_id;
            $cart->qte = $req->qte;
            $cart->save();
            return redirect()->back(); 
    } 
    
    }
    catch(\Throwable $e) {
        //Gérer l'erreur 
        Log::debug($e);
        Log::debug($e->getMessage());

        return "Fail"; 
    }
   
       
}
static function cartItem()
{
    $user_id=Session::get('user')['id'];
    return Cart::where('user_id',$user_id)->count();
}

public function cartList()
{
    try {
        $user_id = Session::get('user')['id'];
        $cart_items = DB::table('cart')
                                    
            ->where('cart.user_id', $user_id)
            ->join('items', 'cart.item_id', '=', 'items.id' )
            ->join('colors', 'cart.color_id', '=', 'colors.id')
            ->join('tailles', 'cart.taille_id', '=', 'tailles.id')
            ->select('items.nom as nom_item','colors.*','tailles.*','items.*','cart.qte','cart.id as cart_id')
            ->get();
    
        return view('Acceuil.cartlist', compact('cart_items')); 
    } catch(\Throwable $e) {
        //Gérer l'erreur 
        Log::debug($e);
        Log::debug($e->getMessage());

        return "Fail"; 
    }
}
public function removeCart($id){
    cart::destroy($id);
    return redirect()->back();
}
public function orderPlace (Request $req)
{
    try{
      $user_id = Session::get('user')['id'];
    $allCart = Cart::where('user_id',$user_id)->get();
    foreach($allCart as $cart)
    {
        $order = new Order;
        $order -> item_id=$cart['item_id'];
        $order -> user_id=$cart['user_id'];
        $order -> color_id=$cart['color_id'];
        $order -> taille_id=$cart['taille_id'];
        $order -> statut = "Confirme";
        $order -> quantite=$cart['qte'];
        $order ->save();
        $allCart = Cart::where('user_id',$user_id)->delete();

    }
    $req ->input();
    return redirect()->back();   
    }
    catch(\Throwable $e) {
        //Gérer l'erreur 
        Log::debug($e);
        Log::debug($e->getMessage());

        return "Fail"; 
    }
    
}
public function orders(){
    try {     
         
        
            
        
        $Orders = DB::table('orders')           
            ->join('items', 'orders.item_id', '=', 'items.id' )
            ->join('colors', 'orders.color_id', '=', 'colors.id')
            ->join('tailles', 'orders.taille_id', '=', 'tailles.id')
            ->join('users','orders.user_id','=','users.id')
            ->select('items.nom as nom_item','colors.*','tailles.*','items.*','orders.quantite','orders.id as order_id','users.nom as nomC','orders.statut')
            ->get();
            return view('Admin.livraison', ['orders' => $Orders]);
   
            
    } catch(\Throwable $e) {
        //Gérer l'erreur 
        Log::debug($e);
        Log::debug($e->getMessage());

        return "Fail"; 
    }
}

public function updateOrderStatus(Request $request, $id)
{
   
   try {
        $order = Order::findOrFail($id);
        $order->statut = $request->input('statut');
        $order->save();

        return redirect()->back()->with('success', 'Statut de la commande mis à jour avec succès');
    } catch (\Throwable $e) {
        // Gérer l'erreur
        Log::debug($e);
        Log::debug($e->getMessage());

        return redirect()->back()->with('error', 'Une erreur est survenue lors de la mise à jour du statut de la commande');
    }
}






}

