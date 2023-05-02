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
  
  <a href="/panier" class="cta-btn">Panier</a>
 <a href="/login" class="cta-btn">Se connecter</a>
</header>




<div class="container  " >
                <div class="row align-items-center text-center">
                  
                    <div class="col-xl-12 col-md-12 col-sm-12 tit ">
                    @foreach ($compaigns as $compaign)
                      <h1>{{$compaign->nom}} </h1>
                    @endforeach
                        
                    </div>
                </div>
            </div>
            

            
            

             @if (isset($compaign->items) && count($compaign->items))
            @foreach ($compaign->items as $itemcompaign) 
            
        <div class="container col-xl-12">
      <div class="row align-items-center text-center  py-3">
        <div class="col-xl-4 bggg py-5">
          <div class=" offset-xl-2 col-xl-4 col-md-4 col-sm-4 bgg py-5 px-5 ">
          <img src="{{ asset('img/model/' . $itemcompaign->mookup) }}" alt="Logo" width="100px" height="100px">                              
          </div>
          <div class=" col-xl-12 col-md-4 col-sm-4 Desc py-4 ">
          <h4>{{$itemcompaign->nom}}</h4>
          <h5>Couleurs disponibles</h5>
                    <div class="container">
                     @foreach ($itemcompaign->color as $itemColor) 
                    <div class="color-sample1 " style="background-color: {{$itemColor->CodeCouleur}}"></div>
                      @endforeach
                        
                    </div>
                    
                    <div class="container">
                    <h5>Échantillons de taille</h5>
                    
                    @foreach ($itemcompaign->taille as $itemtaille)
                    {{$itemtaille->nomtaille}}
                    @endforeach
                    
                    </div>
          </div>
          
        </div>
        @endforeach
        @else
        <h1>Une campagne sera bientot publier</h1>
          @endif 

       
<!--
         
        <div class="col-xl-4 bggg py-5 ">
          <div class=" offset-xl-2 col-xl-4 col-md-4 col-sm-4 bgg py-5 px-5 ">
          <img src="{{asset('img/Model/t-shirt.png') }}" alt="Logo" width="100px" height="100px">
                                
          </div>
          <div class=" col-xl-12 col-md-4 col-sm-4 Desc py-4 ">
          <h4>Merch Session Hiver 2020</h4>
          <h5>Couleurs disponibles</h5>
                    <div class="container">
                <div class="color-sample red"></div>
                <div class="color-sample blue"></div>
                <div class="color-sample green"></div>
                <div class="color-sample yellow"></div>
                <div class="color-sample purple"></div>
                    </div>
                    <div class="container">
                    <h5>Échantillons de taille</h5>
                    <div class="size-sample small">S</div>
                    <div class="size-sample medium">M</div>
                    <div class="size-sample large">L</div>
                    <div class="size-sample extra-large">XL</div>
                    <a href="/" class="cta-btn">Ajouter panier!</a>
                    </div>
                    </div>
          </div>
          
        <div class="col-xl-4 bggg py-5">
          <div class=" offset-xl-2 col-xl-4 col-md-4 col-sm-4 bgg py-5 px-5 ">
          <img src="{{asset('img/Model/t-shirt.png') }}" alt="Logo" width="100px" height="100px">
                                
          </div>
          <div class=" col-xl-12 col-md-4 col-sm-4 Desc py-4 ">
          <h4>Merch Session Hiver 2020</h4>
          <h5>Couleurs disponibles</h5>
                    <div class="container">
                <div class="color-sample red"></div>
                <div class="color-sample blue"></div>
                <div class="color-sample green"></div>
                <div class="color-sample yellow"></div>
                <div class="color-sample purple"></div>
                    </div>
                    <div class="container">
                    <h5>Échantillons de taille</h5>
                    <div class="size-sample small">S</div>
                    <div class="size-sample medium">M</div>
                    <div class="size-sample large">L</div>
                    <div class="size-sample extra-large">XL</div>
                    <a href="/" class="cta-btn">Ajouter panier!</a>
                    </div>
                    
                    </div>
                    
          </div>
          
      </div>

         
      
-->

        

        

        <script src="js/Acceuil.js" defer></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>