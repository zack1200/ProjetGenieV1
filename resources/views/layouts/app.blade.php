<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Technique de l'informatique</title>
    <link rel="icon" href="{{asset('img/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style3.css') }}">
    <title>Document</title>
</head>

<header>
<a href="/" class="logo "><img src="{{asset('img/logo.png') }}" alt="Logo"></a>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

</header>

<body>

<body>
	<nav class="navbar">
        <a href="/home" class=" "><img src="{{asset('img/icon/maison.png') }}" alt="Logo" width="30px" height="30px"></a>
        <!-- <a href="/reservation" class=" "><img src="{{asset('img/icon/presse-papiers-liste-verification.png') }}" alt="Logo" width="30px" height="30px"></a>-->
        <a href="/livraison" class=" "><img src="{{asset('img/icon/livraison.png') }}" alt="Logo" width="30px" height="30px"></a>   
        <a href="/Add" class=" "><img src="{{asset('img/icon/reglages.png') }}" alt="Logo" width="30px" height="30px"></a>
        <a href="/" class=" "><img src="{{asset('img/icon/temps-passe.png') }}" alt="Logo" width="30px" height="30px"></a>
            <br><br>
        <a href="/" class=" "><img src="{{asset('img/icon/exit.png') }}" alt="Logo" width="30px" height="30px"></a>
    </nav>

    @yield('contenuDuMillieu')






    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>