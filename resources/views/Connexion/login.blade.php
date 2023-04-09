<!DOCTYPE html>
<html lang="fr-ca">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style2.css') }}">
    <title>Netflix</title>
    <link rel="icon" href="{{asset('img/logo.png') }}">
</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<br><br><br><br>
        <div class="login" >
            <div class="logo">
             <img src="{{asset('img/logoWhite.png') }}" alt="Logo Image" height="80 px">   
            </div>
        
        
        <h2 class="active ">Connexion </h2>
        
       
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

</body>
</html>