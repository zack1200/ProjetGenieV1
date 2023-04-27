<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style3.css') }}">
    <title>Document</title>
</head>

<header>
<a href="/" class="logo "><img src="{{asset('img/logo.png') }}" alt="Logo"></a>
</header>

<body>
<!DOCTYPE html>
<html>
<head>
	<title>Navbar avec icônes</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	
		
</head>
<body>

    @if (count($users))
        @foreach ($users as $user)
          <li> Utilisateur #{{ $user->id }}</li>
          <li> Nom : {{ $user->nom }}</li>
          <li> Email : {{ $user->email }}</li>

          <form method="POST" action="{{ route('users.destroy', [$user->id]) }}">
            @csrf 
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>
          
        @endforeach
    @else

  <p>Aucun utilisateur admin.</p>

  @endif

  <div>

  <a class="btn btn-default" href="{{ route('SuperAdmin.createAdmin') }}">Ajouter</a>

</div>

</body>
</html>

    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>