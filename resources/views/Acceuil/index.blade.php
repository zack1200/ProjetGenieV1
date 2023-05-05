<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>

<nav class="navbar">
  <div class="navbar-logo">
    <a href="/"><img src="{{asset('img/logo.png') }}" alt="Logo"></a>
  </div>
  <ul class="navbar-options">
    <li><a href="#"><img src="{{asset('img/icon/basket.png') }}" alt="" width="30px" height="30px"></a></li>
    @if (Auth::check())
    <li>Bonjour</li>
    {{Session::get('user')['nom']}}
    @else
    
        <li><a href="/" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Connexion</a></li>
    @endif
    <a href="/deconnexion" id="dec">Deconnexion</a>
  </ul>
</nav>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/login" method="POST">
                @csrf
                <input type="text" class="text" name="email" >  <!-- nom d utilisateur bd: email  -->
                 <span>email</span>
                <br>    
                <br>
                <input type="password" class="text" name="password">   <!-- mot de passe bd : password  -->
                <span>mot de passe</span>
                <br>
                @if ($errors->any())
                    <div>
                        @foreach ($errors->all() as $error)
                        <li class="text-red-500 list-none">
                            {{$error}}
                        </li>
                        @endforeach
                    </div>
                @endif
                <button class="signin" >
                se connecter                
                </button>               
                <a href="/register" class="register" >je n'ai pas de compte </a>
                <hr>   
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
 




<div class="container  " >
                <div class="row align-items-center text-center">
                  
                    <div class="col-xl-12 col-md-12 col-sm-12 tit ">
                    @foreach ($compaigns as $compaign)
                      <h1>{{$compaign->nom}} </h1>
                    @endforeach                        
                    </div>
                </div>
            </div>
            <div class="container">
    <div class="row align-items-center text-center d-flex">
        @if (isset($compaign->items) && count($compaign->items))
            @foreach ($compaign->items as $itemcompaign) 
                <div class="col-xl-4 py-3">
                    <div class="bggg py-5">
                        <div class="offset-2 col-xl-10 col-md-10 col-sm-10 bgg py-5 px-5 ">
                            <img src="{{ asset('img/model/' . $itemcompaign->mookup) }}" alt="Logo" width="100px" height="100px">
                        </div>
                        <div class="col-xl-12 col-md-12 col-sm-12 Desc py-4">
                            <h4>{{$itemcompaign->nom}}</h4>
                             <form action="/add_to_cart" method="post"> 
                                @csrf
                                <div class="container">
                                    <h5>Choisir une couleur</h5>
                                    <div class="">
                                        @foreach ($itemcompaign->color as $itemColor)
                                        <button type="button" class="color-sample-btn" style="background-color: {{$itemColor->CodeCouleur}};" data-value="{{$itemColor->CodeCouleur}}"> 
                                        </button>                           
                                        @endforeach
                                    </div>
                                    <input type="hidden" name="color_id" id="selected-color" value="{{$itemColor->id}}">
                                </div>

                                <div class="container">
                                <h5>Choisir une taille</h5>
                                <div class="">
                                    @foreach ($itemcompaign->taille as $itemtaille)
                                        <button type="button" class="taille-sample-btn" data-value="{{$itemtaille->nomtaille}}" value="{{$itemtaille->id}}">{{$itemtaille->nomtaille}}</button>
                                    @endforeach
                                </div>
                                <input type="hidden" name="taille_id" id="selected-taille" >
                                </div>


                                <div class="container">
                                    <h5>Quantité</h5>                        
                                    <div>                                   
                                    <button type="decrement" onclick="decrement()" class="qte">-</button>
                                    <input type="number" class="qtenbr" id="max_items" name="max_items" min="1" max="{{$itemcompaign->max_item}}" value="1" >
                                    <button type="increment" onclick="increment()" class="qte">+</button>
                                    </div>
                                </div>
                                <input type="hidden" name="item_id" value="{{$itemcompaign->id}}">
                                <div class="container">
                                    <button type="submit">Ajouter au panier</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h1>Une campagne sera bientot publier</h1>
        @endif 
    </div>
</div>

         
      


        

        

        <script src="js/Acceuil.js" defer></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>