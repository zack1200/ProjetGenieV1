@extends('layouts.app')
@section('contenuDuMillieu')

                                    @php $countOrder = 0 @endphp
                                    @foreach ($orders as $order)
                                        @if ($order->statut === 'Confirme')
                                            @php $countOrder++ @endphp
                                        @endif
                                        
                                    @endforeach   
                                    @php $countOrderLiv = 0 @endphp
                                    @foreach ($orders as $order)
                                        @if ($order->statut === 'Livree')
                                            @php $countOrderLiv++ @endphp
                                        @endif
                                        
                                    @endforeach                               
<div class="containerTit  " >
                <div class="row align-items-center text-center">
                    <div class="col-xl-12 col-md-12 col-sm-12  tit">
                        <h1>Merch Session Hiver 2023  
                        <!--<a href="/" class=" "><img src="{{asset('img/icon/play-button.png') }}" alt="Logo" width="30px" height="30px"></a>-->                       
                    </div>
                </div>
            </div>
            <!-- items model-->
            <div class="container py-3 " >
                <div class="row align-items-center ">
                <h1 >Commandes :</h1>
                <div class="col-md-6 capitalise">
                    @foreach ($orders->groupBy('nom_item') as $itemName => $itemOrders)
                        <h3>{{ $itemName }} : {{ $itemOrders->count() }}</h3>
                    @endforeach
                </div>
                    <div class="col-xl-12 col-md-12 col-sm-12  ">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                            <h1>Livraison : </h1>
                            <h3>Nombre d'items livree  : {{$countOrderLiv}}</h3>
                                <h3>Nombre d'items restants  : {{$countOrder}}</h3>
                            </div>                                                       
                        </div>

                    </div>
                    </div>
                    </div>
                    </div>
                        <div class="container " >
                <div class="row align-items-center ">
                            <h1 >En attente :</h1>
                            @foreach ($orders as $order)
                            @if ($order->statut === 'Confirme')                                           
                        <div class="container Reservation capitalise">
                            <div class="row">                            
                                <div class="col-md-3 " style="min-width:125px">
                                <h5 class="optiontitre"><b>{{$order->nomC}}</b></h5>
                                <p>{{$order->nom_item}}</p>                                                                                             
                                </div>    
                                    <div class="col-md-2 " style="min-width:100px">                     
                                    <h5>Qte: {{$order->quantite}}</h5>                                
                                    </div>
                                    <div class="col-md-3" style="min-width:50px"> 
                                        <!--couleur -->
                                        <h5> {{$order->nomtaille}}</h5> 
                                        <div class="color-sample red" style="background-color:{{$order->CodeCouleur}}"></div>                                                           
                                    <h5></h5>                                
                                    </div>
                                    <div class="col-md-1 size" >                                                                                             
                                    <form method="POST" action="{{ route('orders.updateStatus', $order->order_id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="statut" value="Livree">
                                    <button type="submit" class="stat"><img src="{{ asset('img/icon/checked.png') }}" alt="" width="30px" height="30px"></button>
                                    </form>
                                    </div>                                    
                            </div>
                        </div>
                        @endif
                            @endforeach                           
                        <h1 >Livree :</h1>
                        @foreach ($orders as $order)
                            @if ($order->statut === 'Confirme')
                        <div class="container livree capitalise">
                            <div class="row">                              
                                <div class="col-md-3" style="min-width:125px">
                                <h5 class="optiontitre"><b>{{$order->nomC}}</b></h5>
                                <p>{{$order->nom_item}}</p>                                                                                            
                                </div>    
                                <div class="col-md-2 " style="min-width:100px">                     
                                    <h5>Qte: {{$order->quantite}}</h5>                                
                                    </div>
                                    <div class="col-md-3" style="min-width:50px"> 
                                        <!--couleur -->
                                        <h5> {{$order->nomtaille}}</h5> 
                                        <div class="color-sample red" style="background-color:{{$order->CodeCouleur}}"></div>                                                           
                                    <h5></h5>                                
                                    </div>
                                    <div class="col-md-3 size">                                                                                       
                                    </div>                                    
                        </div>
                        </div>
                        @endif
                            @endforeach
@endsection