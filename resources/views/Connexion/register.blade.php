<!DOCTYPE html>
<html lang="fr-ca">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style2.css') }}">
    <title>Netflix</title>
    <link rel="icon" href="https://1000logos.net/wp-content/uploads/2017/05/Netflix-Logo-2006.png">
</head>
<body>

<br><br><br><br>
        <div class="login" >
            <div class="logo">
             <img src="{{asset('img/logoWhite.png') }}" alt="Logo Image" height="80 px">   
            </div>        
        <h2 class="active">créer un compte </h2>      
            <form action="/register" method="POST">
                @csrf
                <input type="text" class="text" name="nom">  <!-- nom d utilisateur bd: email  -->
                 <span>username</span>
                <br>
                <input type="email" class="text" name="email">  <!-- nom d utilisateur bd: email  -->
                 <span>email</span>                
                <br>                    
                <input type="password" class="text" name="password">   <!-- mot de passe bd : password  -->
                <span>mot de passe</span>
                <br>
                <input type="password" class="text" name="password">   <!-- mot de passe bd : password  -->
                <span>confirmer le mot de passe</span>
                <br>
                <input type="hidden" class="text" name="role" value="user">   <!-- mot de passe bd : password  -->               
                @if ($errors->any())
<div>
    @foreach ($errors->all() as $error)
    <li class="text-red-500 list-none">
        {{$error}}
    </li>
    @endforeach
</div>
@endif
                <button class="signin">
                créer mon compte
                </button>
                
                
    
  </form>

</div>


</body>
</html>