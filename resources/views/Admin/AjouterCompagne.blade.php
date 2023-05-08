@extends('layouts.app')

@section('contenuDuMillieu')
  <div class="container">
    <div class="row">
      <div class="offset-2 col-xl-10 col-md-10">
        <div class="row">
          <div class="col-md-3 mb-3">
            <button type="button" class="Ajt" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
              <img src="{{asset('img/icon/campagne.png') }}" alt="Logo" width="100px" height="100px">
              <h5>Programmer une campagne </h5>
            </button>
          </div>
          <div class="col-md-3 mb-3">
            <button type="button" class="Ajt" style="" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
              <img src="{{asset('img/icon/nouveau.png') }}" alt="Logo" width="100px" height="100px">
              <h5>Ajouter un item </h5>
            </button>                            
          </div>
          <div class="col-md-3 mb-3">
            <button type="button" class="Ajt" style="" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
              <img src="{{asset('img/icon/pantone.png') }}" alt="Logo" width="100px" height="100px">
              <h5>Ajouter une couleur </h5>
            </button>                        
          </div>
          <div class="col-md-3 mb-3">
            <button type="button" class="Ajt" style="" data-bs-toggle="modal" data-bs-target="#staticBackdrop9">
              <img src="{{asset('img/icon/utilisateur.png') }}" alt="Logo" width="100px" height="100px">
              <h5>Afficher les utilisateur </h5>
            </button>                        
          </div>
        </div>
      </div>
    </div>

    </div>
       
    @if (isset($items) && count($items))
    <div class="row offset-2 ">
        <div class="col-md-6 col-sm-6">
            @foreach ($items as $item) 
                <div class="container Collection" style=" min-width:650px;">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <img src="{{ asset('img/model/' . $item->mookup) }}" alt="Logo" width="100px" height="100px">
                        </div>
                        <div class="col-md-4">
                            <h5 class="optiontitre"><b>{{$item->nom}}</b></h5>
                        </div>
                        <div class="col-md-3 option">
                            <br>
                            <a href="{{ route('item.update', [$item]) }}"  data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
                                <img src="{{asset('img/icon/bouton-modifier.png') }}" alt="" width="30px" height="30px">                            
                            </a>   
                            <a href="/supprimerI/{{$item['id']}}" class=" "><img src="{{asset('img/icon/supprimer.png') }}" alt="" width="30px" height="30px"></a>
                        </div>
                    </div>
                </div>
            @endforeach
            @else
            <div class="row">
              <div class="offset-6 col-6 align-items-center">
                  <p></p>
              </div>
            </div>
            @endif
        </div>
        <div class="col-md-6 col-sm-6">
            @if (isset($colors) && count($colors))
                @foreach ($colors as $color)
                    <div class="container Collection2" style="background-color: {{$color->CodeCouleur}};border-radius: 10px; width:650px;">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <h5 class="optiontitre"><b>{{$color->nom}}</b></h5>
                            </div>
                            
                            
                        </div>
                    </div>
                @endforeach
            @else
            <div class="row">
              <div class="offset-6 col-6 align-items-center">
                  <p></p>
              </div>
            </div>
                
            @endif
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Liste des utilisateurs </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>  
                    <div class="modal-body">
                    <div class="modal-body">
                        <ul>
                        @foreach(App\Models\User::where('role', 'user')->get() as $user)
                          <li> {{ $user->email }}</li>
                      @endforeach

                        </ul>
                    </div>


                    </div>

                    </div>
                  </div>
                </div>
              </div>






                             
          
       
        
    

    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modification de la campagne</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>  
                    <div class="modal-body">
                        <form action="{{ route('campaign.ajouter') }}" method="post">
                            @csrf    
                            <label for="fname">Nom de campagne</label>
                            <input type="text" id="nom" name="nom" >
                            
                            <label for="date">Date debut</label>
                            <input type="date" id="start_date" name="start_date">
                            
                            <label for="date">Date fin</label>
                            <input type="date" id="end_date" name="end_date">
                            
                            <label for="textarea">Description</label>
                            <textarea id="description" name="description"></textarea>                                   
                            <button class="button">ajouter</button>
                          </form>

                    </div>

                    </div>
                  </div>
                </div>
              </div>

              <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter un item </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>  
                    <div class="modal-body">
                    <form action="{{Route('item.create')}}" method="post">
                      @csrf    
                      <label for="nom">Nom de l'item</label>
                      <input type="text" id="nom" name="nom" value="">
                      
                      
                      <input type="hidden" id="max_items" name="max_items" value="0">
                      
                      
                      <label for="mookup">Sélectionner un mookup</label>
                      <input type="file" class="form-control-file" id="mookup" name="mookup">
                      <button class="button">Ajouter</button>
                  </form>
                        </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modification de la campagne</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>  
                    <div class="modal-body">
                        <form action="{{Route('color.create')}}" method="post">
                            @csrf    
                            <label for="fname">Nom de la couleur</label>
                            <input type="text" id="nom" name="nom" >                            
                            <label for="CodeCouleur">choisissez une couleur </label>
                            <input type="color" id="CodeCouleur" name="CodeCouleur">                                                              
                            <button class="button">ajouter</button>
                          </form>

                    </div>

                    </div>
                  </div>
                </div>
              </div>
              <!-- fin items model-->

              <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modification de l'item</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>  
                    <div class="modal-body">
                    @foreach($items as $item)
                      <form action="{{ route('item.update', $item->id) }}" method="post">
                          @csrf
                          @method('PATCH')
                          <label for="fname">Nom de l'item</label>
                          <input type="text" id="nom" name="nom" value="{{ old('nom', $item->nom) }}">
                          <label for="fname">max_items</label>
                          <input type="text" id="max_items" name="max_items" value="{{ old('max_items', $item->max_items) }}">
                          <label for="mookup">Sélectionner un mookup</label>
                          <input type="file" class="form-control-file" id="mookup" name="mookup" value="{{ old('mookup', $item->mookup) }}">
                          <button class="button">modifier</button>
                      </form>
                    @endforeach

                        </div>
                    </div>
                  </div>
                </div>
              </div>



    <script src="js/ColorPicker.js" defer></script>
  </div> 

@endsection
