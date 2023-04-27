<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <ling rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

@if(isset($errors) && $errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

  
  <form method="post" action="{{ route ('users.store') }}">
    @csrf
      <div class="form-group">
      <label for="nomUser" >Nom de l'utilisateur</label>
      <input type="text" class="form-control" id="nomUser" placeholder="Entrer nom" name="nom" >
      </div>
      
      <div class="form-group">
      <label for="emailUser" >Email de l'utilisateur</label>
      <input type="text" class="form-control" id="emailUser" placeholder="Entrer email" name="email">
      </div>

      <div class="form-group">
      <label for="mdpUser" >Mot de passe de l'utilisateur</label>
      <input type="text" class="form-control" id="mdpUser" placeholder="Entrer un mot de passe" name="mdp">
      </div>

      <button type="submit" class="btn btn-primary">Enregistrer</button>

  </form>







  
</body>
</html>