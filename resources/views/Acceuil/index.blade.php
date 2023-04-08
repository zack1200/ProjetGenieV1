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
  <a href="#" class="logo"><img src="{{asset('img/logo.png') }}" alt="Logo"></a>
  <nav>
    
    <a href="#" class="cta-btn">Se connecter</a>
    
  </nav>
</header>


<div class="container  " >
                <div class="row align-items-center text-center">
                    <div class="col-xl-12 col-md-12 col-sm-12 ">
                        <h1>Merch Session Hiver 2023</h1>
                    </div>
                </div>
            </div> 
    
        <div class="container ">
            <div class="row align-items-center text-center  py-5 ">
            <div class="col-xl-6 col-md-6 col-sm-6  ">
                <div class="row align-items-center text-center bggg py-5 ">
                <div class="offset-xl-1 col-xl-4 col-md-4 col-sm-4 bgg py-5 px-5 ">
                
                <div class="slider">
                <div class="slider-container">
                    <img src="https://wallpapercave.com/wp/wp3185345.jpg" alt="Image 1">
                    <img src="https://wallpapercave.com/wp/wp3185345.jpg" alt="Image 2">
                    
                </div>
                <button class="prevBtn">&lt;</button>
                <button class="nextBtn">&gt;</button>
                </div>
            </div>
             </div>
             </div>
             

                <div class="col-xl-6 col-md-6 col-sm-6 bgg py-5 px-5"> 
                 
                         <h1>Formulaire de commande de T-shirt</h1>
                         <form id="shirt-form">
                                    <label>Couleur:</label>
                                <div class="color-options">
                                <div class="color-option red" id="color-red"></div>
                                <div class="color-option green" id="color-green"></div>
                                <div class="color-option blue" id="color-blue"></div>
                                </div>
                                                    
                                <div class="size-options">
                                    <label>Taille:</label>
                                    <div class="size-option">S</div>
                                    <div class="size-option">M</div>
                                    <div class="size-option">L</div>
                                    <div class="size-option">XL</div>
                                 </div>
                                <button type="submit" class="cta-btn">Reserver</button>
                         </form>

                </div>
                
            </div>
        </div>

        

        <script src="js/Acceuil.js" defer></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>