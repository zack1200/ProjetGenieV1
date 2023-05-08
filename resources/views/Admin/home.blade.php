@extends('layouts.app')
@section('contenuDuMillieu')



	<div class="containerTit  " >
        <!-- Afficher les titre de la campagne -->
        @if (isset($compaigns) && count($compaigns))
    @foreach ($compaigns as $compaign)
                <div class="row align-items-center text-center">
                
                <div class="col-xl-12 col-md-12 col-sm-12  tit "style="">
                
                        <h1>
                        @if($compaign->actif)                           
                            {{$compaign->nom}} / inactif  
                            @else 
                            {{$compaign->nom}} / actif  
                            @endif                                               
                        <a href="{{ route('campaign.updateActif', [$compaign]) }}"  data-bs-toggle="modal" data-bs-target="#staticBackdrop3" >
                        <img src="{{asset('img/icon/play-button.png') }}" alt="" width="30px" height="30px"></a>                             
                                                  
                         <a href="{{ route('campaign.update', [$compaign]) }}"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
                         <img src="{{asset('img/icon/bouton-modifier.png') }}" alt="" width="30px" height="30px">                            
                            </a>   </h1>   
                            
                                            
                    </div>
                </div>
            </div>
            <div class="container py-4" >
                <div class="row align-items-center ">
                  <div class="col-xl-12 col-md-12 col-sm-12  ">
                        <h1>Collections  : <a href="{{ route('campaign.updateActif', [$compaign]) }}"  data-bs-toggle="modal" data-bs-target="#staticBackdrop5" class="AjouterItem" >
                        <img src="{{asset('img/icon/plus.png') }}" alt="" width="30px" height="30px"> 
                        Ajouter un item a la campagne </a> 
                      </h1>
                  </div>
                </div>
              </div>

              

            @endforeach
            
            <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter un item </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>  
                    <div class="modal-body">
                          <form action="{{Route('item.createCampagneItemColorSize')}}" method="post">
                              @csrf

                              <label for="max_items">max_items</label>
                              <input type="text" id="max_items" name="max_items" value="">

                              <label for="item_id">Sélectionner un item</label>
                              <select name="item_id" id="item_id">
                                  @foreach($items as $item)
                                      <option value="{{ $item->id }}">{{ $item->nom }}</option>
                                  @endforeach
                              </select>

                              <label for="couleur">Sélectionner une couleur :</label>
                              <select name="couleur" id="couleur">
                                  <option value="">Sélectionner une couleur</option>
                                  @foreach($couleurs as $couleur)
                                      <option value="{{ $couleur->id }}">{{ $couleur->nom }}</option>
                                  @endforeach
                              </select>
                              

                              <label for="taille">Sélectionner une taille :</label>
                              <select name="taille" id="taille">
                                  <option value="">Sélectionner une taille</option>
                                  @foreach($tailles as $taille)
                                      <option value="{{ $taille->id }}">{{ $taille->nomtaille }}</option>
                                  @endforeach
                              </select>

                              <input type="hidden" id="compaign_id" name="compaign_id" value="{{$compaign->id}}"else>
                              <button class="button">Ajouter</button>
                          </form>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
             

              <!-- Afficher les items de la campagne de la campagne -->

            

            <!-- items model--> 
            @if (isset($compaign->items) && count($compaign->items))
            @foreach ($compaign->items as $itemcompaign) 
            <div class="container " >
                <div class="row align-items-center ">
                    <div class="col-xl-12 col-md-12 col-sm-12  ">
                        
<!--Afficher les items de la campagne  -->
                     
                      
                        <div class="container Collection">
                            <div class="row">
                                <div class="col-md-2">
                                <img src="{{ asset('img/model/' . $itemcompaign->mookup) }}" alt="Logo" width="100px" height="90px">
                                </div>
                                
                                <div class="col-md-6">
                                <h5 class="optiontitre"><b>{{$itemcompaign->nom}}</b></h5>
<!--couleurs-->                               
                                @php $countColors = 0 @endphp
                                @foreach ($itemcompaign->color as $itemColor)                                    
                                    @php $countColors++ @endphp
                                @endforeach
                                <h5>Nombre de couleurs disponibles : {{$countColors}}</h5>
                                
<!--tailles -->
                                @php $counttailles = 0 @endphp
                                @foreach ($itemcompaign->taille as $itemTaille)                                    
                                    @php $counttailles++ @endphp
                                @endforeach
                                <h5>tailles disponibles : {{$counttailles}}</h5> 


                                </div>
                                <div class="col-md-4 option">
                                    <br>
                                    <a href="{{ route('item.update', [$itemcompaign]) }}"  data-bs-toggle="modal" data-bs-target="#staticBackdrop2" >
                                        <img src="{{asset('img/icon/bouton-modifier.png') }}" alt="" width="30px" height="30px">                            
                                    </a>  
                                    <a href="/detacher/{{$itemcompaign['id']}}" class=" "><img src="{{asset('img/icon/supprimer.png') }}" alt="" width="30px" height="30px">
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                             
                            
                            






            <!-- fin items model-->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modification de la campagne</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>  
                    <div class="modal-body">
                    <form action="{{route('campaign.update', [$compaign]) }}" method="post">
                             @csrf    
                                @method('PATCH')
                                <label for="fname">Nom de campagne</label>
                                <input type="text" id="nom" name="nom" value="{{ old('nom', $compaign->nom) }}">
                                <label for="date">Date debut</label>
                                <input type="date" id="start_date" name="start_date" value="{{ old('start_date', $compaign->start_date) }}">
                                <label for="date">Date fin</label>
                                <input type="date" id="end_date" name="end_date" value="{{ old('end_date', $compaign->end_date) }}">
                                <label for="textarea">Description</label>
                                <textarea id="description" name="description">{{ old('description', $compaign->description) }}</textarea>                                   
                                <button class="button">modifier</button>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- fin items model-->

              <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modification de l'item</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>  
                    <div class="modal-body">
                    <form action="{{route('item.update', [$itemcompaign]) }}" method="post">
                    
                             @csrf    
                                @method('PATCH')
                                <label for="fname">Nom de l'item</label>
                                <input type="text" id="nom" name="nom" value="{{ old('nom', $itemcompaign->nom) }}">
                                <label for="fname">max_items</label>
                                <input type="text" id="max_items" name="max_items" value="{{ old('max_items', $itemcompaign->max_items) }}">
                                <label for="mookup">Sélectionner un mookup</label>
                                <input type="file" class="form-control-file" id="mookup" name="mookup" value="{{ old('mookup', $itemcompaign->mookup) }}">
                                <label for="actif">Actif :</label>
                                  <select name="actif" id="actif">
                                      <option value="1" {{ $itemcompaign->actif ? 'selected' : '' }}>Oui</option>
                                      <option value="0" {{ !$itemcompaign->actif ? 'selected' : '' }}>Non</option>
                                  </select> 
                                                                                                
                                <button class="button">modifier</button>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
              </div>

               <!-- fin items model-->

               <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modification du statut de la campagne </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>  
                    <div class="modal-body">
                    <form action="{{ route('campaign.updateActif', [$compaign]) }}" method="post">
                    @csrf    
                    @method('PATCH')

                    <div class="form-group">
                    
                        <label for="actif">Statut :</label>
                        @if($compaign->actif)
                        <p class="text-danger">Campagne inactive</p>
                        @else
                        <p class="text-success">Campagne active</p>
                            
                        @endif
                    

                        <label for="actif">Actif :</label>
                            <select name="actif" id="actif">
                                <option value="1" {{ $compaign->actif ? 'selected' : '' }}>Oui</option>
                                <option value="0" {{ !$compaign->actif ? 'selected' : '' }}>Non</option>
                            </select>

                    <button class="button">modifier</button>
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
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modification du statut de l'item </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>  
              <div class="modal-body">
                <form action="{{ route('item.updateActif', [$itemcompaign]) }}" method="post">
                  @csrf    
                  @method('PATCH')
                  <div class="form-group">
                    <label for="actif">Statut :</label>
                    @if($itemcompaign->item_actif)
                    <p class="text-success">L'item est actif</p>
                    @else
                    <p class="text-danger">L'item est inactif</p>
                    @endif
                    <label for="item_actif">Actif :</label>
                    <select name="item_actif" id="item_actif">
                      <option value="1" {{ $itemcompaign->item_actif ? 'selected' : '' }}>Oui</option>
                      <option value="0" {{ !$itemcompaign->item_actif ? 'selected' : '' }}>Non</option>
                    </select>
                  </div>
                  <button class="button">modifier</button>
                </form>
              </div>
            </div>
          </div>
        </div>

 

                        </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
                @else                            
                   
                    <div class="container " >
                <div class="row align-items-center ">
                  <div class="col-xl-12 col-md-12 col-sm-12  ">
                        <h1>Aucuns items n est afficher
                            
                      </h1>
                  </div>
                </div>
              </div>
              </div>
              <!-- fin items model-->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modification de la campagne</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>  
                    <div class="modal-body">
                    <form action="{{route('campaign.update', [$compaign]) }}" method="post">
                             @csrf    
                                @method('PATCH')
                                <label for="fname">Nom de campagne</label>
                                <input type="text" id="nom" name="nom" value="{{ old('nom', $compaign->nom) }}">
                                <label for="date">Date debut</label>
                                <input type="date" id="start_date" name="start_date" value="{{ old('start_date', $compaign->start_date) }}">
                                <label for="date">Date fin</label>
                                <input type="date" id="end_date" name="end_date" value="{{ old('end_date', $compaign->end_date) }}">
                                <label for="textarea">Description</label>
                                <textarea id="description" name="description">{{ old('description', $compaign->description) }}</textarea>                                   
                                <button class="button">modifier</button>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
                     <!-- fin items model-->

        <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter un item </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>  
                    <div class="modal-body">
                    <form action="{{Route('item.createCampagneItemColorSize')}}" method="post">
                              @csrf

                              <label for="max_items">max_items</label>
                              <input type="text" id="max_items" name="max_items" value="">

                              <label for="item_id">Sélectionner un item</label>
                              <select name="item_id" id="item_id">
                                  @foreach($items as $item)
                                      <option value="{{ $item->id }}">{{ $item->nom }}</option>
                                  @endforeach
                              </select>

                              <label>Sélectionner une ou plusieurs couleurs :</label>
                          @foreach($couleurs as $couleur)
                              <div>
                                  <input type="checkbox" id="color_{{ $couleur->id }}" name="colors[]" value="{{ $couleur->id }}">
                                  <label for="color_{{ $couleur->id }}">{{ $couleur->nom }}  </label>
                              </div>
                          @endforeach


                          <label>Sélectionner une ou plusieurs tailles :</label>
                          @foreach($tailles as $taille)
                              <div>
                                  <input type="checkbox" id="taille_{{ $taille->id }}" name="tailles[]" value="{{ $taille->id }}">
                                  <label for="taille_{{ $taille->id }}">{{ $taille->nomtaille }}  </label>
                              </div>
                          @endforeach

                          <input type="hidden" id="compaign_id" name="compaign_id" value="{{$compaign->id}}"else>
                          <button class="button">Ajouter</button>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                @endif
              @else
                          
             <div class="container py-4" >
                <div class="row align-items-center ">
                  <div class="col-xl-12 col-md-12 col-sm-12  ">
                        <h1>&nbsp;&nbsp;Acune campagne n'est en cours  : &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="/"  data-bs-toggle="modal" data-bs-target="#staticBackdrop1" class="AjouterItem" >
                        <img src="{{asset('img/icon/plus.png') }}" alt="" width="30px" height="30px"> 
                        Ajouter une campagne  </a> 
                      </h1>
                  </div>
                </div>
              </div>
              </div>
              <!-- fin items model-->
            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modification de la campagne</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>  
                    <div class="modal-body">
                    <form action="AjouterCampagne" method="post">
                             @csrf    
                                
                                <label for="fname">Nom de campagne</label>
                                <input type="text" id="nom" name="nom" >
                                <label for="date">Date debut</label>
                                <input type="date" id="start_date" name="start_date" >
                                <label for="date">Date fin</label>
                                <input type="date" id="end_date" name="end_date" >
                                <label for="textarea">Description</label>
                                <textarea id="description" name="description"></textarea>                                   
                                <button class="button">modifier</button>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
             @endif
            
            @endsection




