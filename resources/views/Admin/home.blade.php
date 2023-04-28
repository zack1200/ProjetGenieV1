@extends('layouts.app')
@section('contenuDuMillieu')

	<div class="containerTit  " >
        <!-- Afficher les titre de la campagne -->
    @foreach ($compaigns as $compaign)
                <div class="row align-items-center text-center">
                @if($compaign->actif)
                <div class="col-xl-12 col-md-12 col-sm-12  tit "style="background-color: green;">
                @else
                    <div class="col-xl-12 col-md-12 col-sm-12  tit "style="background-color: red;">
                    @endif
                        <h1>                           
                            {{$compaign->nom}}                                                   
                        <a href="{{ route('campaign.updateActif', [$compaign]) }}"  data-bs-toggle="modal" data-bs-target="#staticBackdrop3" >
                        <img src="{{asset('img/icon/play-button.png') }}" alt="" width="30px" height="30px"></a>                             
                                                  
                         <a href="{{ route('campaign.update', [$compaign]) }}"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
                         <img src="{{asset('img/icon/bouton-modifier.png') }}" alt="" width="30px" height="30px">                            
                            </a>      
                                            
                    </div>
                </div>
            </div>

            @endforeach

              <!-- Afficher les items de la campagne de la campagne -->

            @if (isset($compaign->items) && count($compaign->items))
            @foreach ($compaign->items as $itemcompaign) 

            <!-- items model-->
            <div class="container py-5" >
                <div class="row align-items-center ">
                    <div class="col-xl-12 col-md-12 col-sm-12  ">
                        <h1>Collections  : <a href="{{ route('campaign.updateActif', [$compaign]) }}"  data-bs-toggle="modal" data-bs-target="#staticBackdrop5" class="AjouterItem" >
                        <img src="{{asset('img/icon/plus.png') }}" alt="" width="30px" height="30px"> 
                        Ajouter un item a la campagne </a> 
                      </h1>
                        <div class="container Collection">
                            <div class="row">
                                <div class="col-md-2">
                                <img src="{{$itemcompaign->mookup}}" alt="Logo" width="100px" height="100px">
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


                                     <a href="{{ route('campaign.updateActif', [$compaign]) }}"  data-bs-toggle="modal" data-bs-target="#staticBackdrop4" >
                                        <img src="{{asset('img/icon/play-button.png') }}" alt="" width="30px" height="30px"></a>    
                                    <a href="/" class=" "><img src="{{asset('img/icon/supprimer.png') }}" alt="" width="30px" height="30px"></a>
                                </div>
                            </div>
                        </div>
                            @endforeach
                            @else
                            <h1>Une campagne sera bientot publier</h1>
                            @endif                    
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
                                <label for="fname">mookup</label>
                                <input type="text" id="mookup" name="mookup" value="{{ old('mookup', $itemcompaign->mookup) }}"> 
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
                            <p class="text-success">Campagne active</p>
                        @else
                            <p class="text-danger">Campagne inactive</p>
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

        <!-- fin items model-->

        <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modification de l'item</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>  
                    <div class="modal-body">
                    <form action="{{Route('item.create')}}" method="post">
                      @csrf    
                      <label for="nom">Nom de l'item</label>
                      <input type="text" id="nom" name="nom" value="">
                      
                      <label for="max_items">max_items</label>
                      <input type="text" id="max_items" name="max_items" value="">
                      
                      <label for="mookup">mookup</label>
                      <input type="text" id="mookup" name="mookup" value=""> 
                      
                      <label for="actif">Afficher :</label>
                      <select name="actif" id="actif">
                          <option value="1" {{ $itemcompaign->actif ? 'selected' : '' }}>Oui</option>
                          <option value="0" {{ !$itemcompaign->actif ? 'selected' : '' }}>Non</option>
                      </select> 
                      
                      <input type="text" id="compaign_id" name="compaign_id" value="{{$compaign->id}}">  
                      <button class="button">Ajouter</button>
                  </form>
                        </div>
                    </div>
                  </div>
                </div>
              </div>



            
            
            @endsection