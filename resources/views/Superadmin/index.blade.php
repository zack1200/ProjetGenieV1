<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
    <link rel="stylesheet" href="{{asset('css/superadmin.css') }}">
    <title>Document</title>
</head>
<body>
<header>
  <a href="#" class="logo"><img src="{{asset('img/logo.png') }}" alt="Logo"></a>
  <nav>
     <button class="btd switch slider round" id="dark-mode-toggle">Mode Nuit</button>
  </nav>
</header>

<!-- Faire un affichage pour pouvoir présenter les admins actuel, pouvoir modifier ou supprimer un admin (mettre une bouton poubelle ou un bouton modifier a son cote ) 
, Mettre un bouton qui nous redirigera vers un formulaire pour pouvoir creer un nouveau compte admin. C'est tout pour ce role , affichage des admins, suppresion, modification et creation d'un admin -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

<!--<h1>Voici la liste des films</h1>

@if (count($films))    @foreach($films as $film)       <li>{{ $film->nom }}</li>
       <li>{{ $film->description }}</li>    @endforeach @else
    <p>Il n'y a aucun film.</p>
@endif
 -->
<div class="container mt-3 mb-4">
<button class="btd switch slider round">Ajouter</button>
<br><br>
<div class="col-lg-12 mt-4 mt-lg-0">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
          <table class="table manage-candidates-top mb-0">
            <thead>
              <tr>
                <th>Admins</th>
                <th> </th>
                <th class="action text-right">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr class="candidates-list">
                <td class="title">
                 
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0">Brooke Kelly</h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">                                                
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>       

                <td class="candidate-list-favourite-time text-center">
                </td>


                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">               
                    <li><a href="#" class="text-info" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                    <li><a href="#" class="text-danger" data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li>
                  </ul>
                </td>
              </tr>
              <tr class="candidates-list">
                <td class="title">
                 
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0">Ronald Bradley</h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>

                <td class="candidate-list-favourite-time text-center">
                </td>

                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    <li><a href="#" class="text-info" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                    <li><a href="#" class="text-danger" data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li>
                  </ul>
                </td>
              </tr>
              <tr class="candidates-list">
                <td class="title">
        
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0">Rafael Briggs</h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">

                        </ul>
                      </div>
                    </div>
                  </div>
                </td>

                <td class="candidate-list-favourite-time text-center">
                </td>
                <td>

                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    <li><a href="#" class="text-info" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                    <li><a href="#" class="text-danger" data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li>
                  </ul>
                </td>
              </tr>
              <tr class="candidates-list">
                <td class="title">
  
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0">Vickie Meyer</h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">

                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="candidate-list-favourite-time text-center">
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">                
                    <li><a href="#" class="text-info" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                    <li><a href="#" class="text-danger" data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li>
                  </ul>
                </td>
              </tr>
              <tr class="candidates-list">
                <td class="title">

                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0">Nichole Haynes</h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="candidate-list-favourite-time text-center">
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">              
                    <li><a href="#" class="text-info" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                    <li><a href="#" class="text-danger" data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li>
                  </ul>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="text-center mt-3 mt-sm-3">
            <ul class="pagination justify-content-center mb-0">
              <li class="page-item disabled"> <span class="page-link">Prev</span> </li>
              <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


        <script src="js/Acceuil.js" defer></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>