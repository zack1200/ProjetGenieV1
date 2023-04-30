@extends('layouts.app')

@section('contenuDuMillieu')
  <div class="container">
    <div class="row">
      <div class="offset-xl-2 col-xl-10 col-md-4">
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
            <button type="button" class="Ajt" style="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <img src="{{asset('img/icon/pantone.png') }}" alt="Logo" width="100px" height="100px">
              <h5>Ajouter une couleur </h5>
            </button>                        
          </div>
          <div class="col-md-3 mb-3">
            <button type="button" class="Ajt" style="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <img src="{{asset('img/icon/utilisateur.png') }}" alt="Logo" width="100px" height="100px">
              <h5>Afficher les utilisateur </h5>
            </button>                        
          </div>
        </div>
      </div>
    </div>

    </div>
       

    @if (isset($items) && count($items))
    @foreach ($items as $item) 
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-md-12 col-sm-12">
                    <div class="container Collection">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="{{ asset('img/model/' . $item->mookup) }}" alt="Logo" width="100px" height="100px">
                            </div>
                            <div class="col-md-6">
                                <h5 class="optiontitre"><b>{{$item->nom}}</b></h5>
                            </div>
                            <div class="col-md-4 option">
                                
                                <a href="/" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                    <img src="{{asset('img/icon/bouton-modifier.png') }}" alt="" width="30px" height="30px">                            
                                </a>  
                                <a href="/" class=""><img src="{{asset('img/icon/supprimer.png') }}" alt="" width="30px" height="30px">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@else
    <p>Pas d'élément</p>
@endif

                             
          
       
        
    

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



    <script src="js/ColorPicker.js" defer></script>
  </div> 

@endsection
