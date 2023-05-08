<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ajoutAdmin.css') }}">

</head>
<body>
<header>
  <a href="/" class="logo "><img src="{{asset('img/logo.png') }}" alt="Logo"></a>
</header>

<h1 id="titre" class="mb-5">Ajouter un Admin</h3>
  
  <form id="formulaireAjout" method="post" action="{{ route ('users.store') }}">
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
      <label for="passwordUser" >Mot de passe de l'utilisateur</label>
      <input type="text" class="form-control" id="passwordUser" placeholder="Entrer un mot de passe" name="password">
      </div>

      <div class="form-group">
     
      <input type="hidden" class="form-control" id="roleUser" placeholder="Entrer le mot Admin" name="role" value="Admin">
      </div>

      <button id="boutonEnregistrer" type="submit" class="btn btn-primary">Enregistrer</button>

      
  </form>







  
</body>
</html>