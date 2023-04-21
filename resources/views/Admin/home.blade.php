@extends('layouts.app')
@section('contenuDuMillieu')

	<div class="containerTit  " >
                <div class="row align-items-center text-center">
                    <div class="col-xl-12 col-md-12 col-sm-12  tit">
                        <h1>Merch Session Hiver 2023  
                        <a href="/" class=" "><img src="{{asset('img/icon/play-button.png') }}" alt="Logo" width="30px" height="30px"></a>
                        
                    </div>
                </div>
            </div>


            <!-- items model-->
            <div class="container py-5" >
                <div class="row align-items-center ">
                    <div class="col-xl-12 col-md-12 col-sm-12  ">
                        <h1>Collections  :</h1>
                        <div class="container Collection">
                            <div class="row">
                                <div class="col-md-2">
                                <img src="{{asset('img/Model/t-shirt.png') }}" alt="Logo" width="100px" height="100px">
                                </div>
                                <div class="col-md-6">
                                <h5 class="optiontitre"><b>T-shirts</b></h5>
                                <h5>Couleurs disponibles : 7</h5>
                                <h5>Tailles disponibles : 7</h5>
                                </div>
                                <div class="col-md-4 option">
                                    <br>
                                    <a href="/" class=" "><img src="{{asset('img/icon/bouton-modifier.png') }}" alt="" width="30px" height="30px"></a>
                                    <a href="/" class=" "><img src="{{asset('img/icon/bouton-pause.png') }}" alt="" width="30px" height="30px"></a>
                                    <a href="/" class=" "><img src="{{asset('img/icon/supprimer.png') }}" alt="" width="30px" height="30px"></a>
                                </div>
                            </div>
                        </div>

                        <div class="container Collection">
                            <div class="row">
                                <div class="col-md-2">
                                <img src="{{asset('img/Model/sweat-a-capuche.png') }}" alt="" width="100px" height="100px">
                                </div>
                                <div class="col-md-6">
                                <h5 class="optiontitre"> <b>sweet a capuche</b></h5>
                                <h5>Couleurs disponibles : 7</h5>
                                <h5>Tailles disponibles : 7</h5>
                                </div>
                                <div class="col-md-4 option">
                                    <br>
                                    <a href="/" class=" "><img src="{{asset('img/icon/bouton-modifier.png') }}" alt="" width="30px" height="30px"></a>
                                    <a href="/" class=" "><img src="{{asset('img/icon/bouton-pause.png') }}" alt="" width="30px" height="30px"></a>
                                    <a href="/" class=" "><img src="{{asset('img/icon/supprimer.png') }}" alt="" width="30px" height="30px"></a>
                                </div>
                            </div>
                        </div>

                        <div class="container Collection">
                            <div class="row">
                                <div class="col-md-2">
                                <img src="{{asset('img/Model/casquette.png') }}" alt="" width="100px" height="100px">
                                </div>
                                <div class="col-md-6">
                                <h5 class="optiontitre"><b>Casquette</b></h5>
                                <h5>Couleurs disponibles : 7</h5>
                                <h5>Tailles disponibles : 7</h5>
                                </div>
                                <div class="col-md-4 option">
                                    <br>
                                    <a href="/" class=" "><img src="{{asset('img/icon/bouton-modifier.png') }}" alt="" width="30px" height="30px"></a>
                                    <a href="/" class=" "><img src="{{asset('img/icon/bouton-pause.png') }}" alt="" width="30px" height="30px"></a>
                                    <a href="/" class=" "><img src="{{asset('img/icon/supprimer.png') }}" alt="" width="30px" height="30px"></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- fin items model-->
            
            
            @endsection