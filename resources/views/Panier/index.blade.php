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
<header>
  <a href="/" class="logo "><img src="{{asset('img/logo.png') }}" alt="Logo"></a>
  <a href="/" class="cta-btn">Retour</a>
</header>


<div class="container  " >
                <div class="row align-items-center text-center">
                    <div class="col-xl-12 col-md-12 col-sm-12 tit ">
                        <h1>Votre panier !!</h1>
                    </div>
                </div>
            </div>
<div class="containe">
    <div class="row ">
        <div class="col-xl-7 col-md-7 col-sm-7">
            ICI LES ITEMS
            @if(count($itemsPanier))
              @foreach($itemsPanier as $itemPanier)
                <a href="{{ route('titres.show', [$titre]) }}">
                  <img src="{{ asset('img/titres/' . $titre->poster) }}" class="imgP hvr-grow" alt="{{ $titre->nom }}">
                </a>
                $itemPanier->nom
              @endforeach
            @else
              <h1>Aucun titre</h1>
            @endif
        </div>
        <div class="col-xl-4 col-md-4 col-sm-4">
            ICI PRIX
        </div>
    </div>
</div>
            

      
      
    

        

        

        <script src="js/Acceuil.js" defer></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>