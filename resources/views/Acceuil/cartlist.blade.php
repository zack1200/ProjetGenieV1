<!DOCTYPE html>
<html lang="fr-ca">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Technique de l'informatique</title>
    <link rel="icon" href="{{asset('img/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
<?php 

use App\Http\Controllers\ItemsController;
$total=0;
if(Session::has('user')){
    $total = ItemsController::cartItem();
}


?>
<nav class="navbar">
  <div class="navbar-logo">
    <a href="/"><img src="{{asset('img/logo.png') }}" alt="Logo"></a>
  </div>
  <ul class="navbar-options">
    
    @if(Session::has('user'))

    
    <div class="btn-group">
        <button type="button" class="dropLog dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            {{Session::get('user')['nom']}}
        </button>
            <ul class="dropdown-menu down">                
                <li><a href="/deconnexion" id="dec">Commande</a></li>
                <li><a href="/deconnexion" id="dec">Deconnexion</a></li>
                
            </ul>
    </div>
    <li class="navIcon"><a href="/cartlist "  ><img src="{{asset('img/icon/basket.png') }}" alt="" width="30px" height="30px" >({{$total}})</a></li>
    @else
    <li><a href="/" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Connexion</a></li>
    @endif

   
  </ul>
</nav>
<h1>Mon panier</h1>
<form action="orderplace" method="POST">
    @csrf
<button type="submit" class="btn ">confirmer </button>
</form>

<br><br>
<div class="col-md-5 ">
@foreach($cart_items as $item)
<div class="row cart_devider">
    <div class="col-md-3 ">
    <img src="{{ asset('img/model/' . $item->mookup) }}" alt="" width="100px" height="90px" >
    </div>
    <div class="col-md-3 ">
        <p> {{ $item->nom_item }} </p>
        <p> Taille : {{ $item->nomtaille }} </p>
        <span class="color-sample" style="background-color: {{ $item->CodeCouleur }};"></span>
    </div>
    <div class="col-md-3 ">
        <a href="/removefromcart/{{ $item->cart_id}}" class="btn btn-warning">remove to cart </a>
    </div>
</div>

@endforeach 
</div>














    


         
      


        

        

        <script src="js/Acceuil.js" defer></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>