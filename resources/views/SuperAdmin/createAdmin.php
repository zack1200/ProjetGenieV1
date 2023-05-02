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
      <label for="passwordUser" >Mot de passe de l'utilisateur</label>
      <input type="text" class="form-control" id="passwordUser" placeholder="Entrer un mot de passe" name="password">
      </div>

      <div class="form-group">
      <label for="roleUser" >Role : Admin</label>
      <input type="text" class="form-control" id="roleUser" placeholder="Entrer le mot Admin" name="role">
      </div>

      <button type="submit" class="btn btn-primary">Enregistrer</button>

  </form>







  
</body>
</html>