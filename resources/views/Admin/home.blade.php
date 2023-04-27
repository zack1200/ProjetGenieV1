@extends('layouts.app')
@section('contenuDuMillieu')

	<div class="containerTit  " >
                <div class="row align-items-center text-center">
                    <div class="col-xl-12 col-md-12 col-sm-12  tit">
                        <h1>
                            @foreach ($compaigns as $compaign)
                            {{$compaign->nom}}
                            @endforeach 
                        <a href="/" class=" "><img src="{{asset('img/icon/play-button.png') }}" alt="Logo" width="30px" height="30px"></a>                       
                         <a href="{{ route('campaign.update', [$compaign]) }}"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
                         <img src="{{asset('img/icon/bouton-modifier.png') }}" alt="" width="30px" height="30px">                            
                            </a>                      
                    </div>
                </div>
            </div>



            @if (isset($compaign->items) && count($compaign->items))
            @foreach ($compaign->items as $itemcompaign) 

            <!-- items model-->
            <div class="container py-5" >
                <div class="row align-items-center ">
                    <div class="col-xl-12 col-md-12 col-sm-12  ">
                        <h1>Collections  :</h1>
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
                                    
                                    <img src="{{asset('img/icon/bouton-modifier.png') }}" alt="" width="30px" height="30px">
                                   


                                    <a href="/" class=" "><img src="{{asset('img/icon/bouton-pause.png') }}" alt="" width="30px" height="30px"></a>
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
            
            
            @endsection