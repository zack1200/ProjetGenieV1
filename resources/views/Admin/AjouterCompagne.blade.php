@extends('layouts.app')
@section('contenuDuMillieu')
                            <div class="container ">
                            <div class="row">
                                <h1>Ajouter une Camapgne</h1>                           
                <div class="col-xl-12 col-md-4">
                        <form class="needs-validation" novalidate>
                                <div class="row">
                                  <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Nom de la Camapgne</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="prenom" value="" required>
                                    
                                  </div>
                                  
                                  
                                </div>
                                <div class="row">
                                  <div class="col-md-4 mb-3">
                                    <label for="validationCustom03">Date debut</label>
                                    <input type="date" class="date" id="date" placeholder="date debut" required>
                                    <div class="invalid-feedback">
                                      veuillez rentrer une ville valide 
                                    </div>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                    <label for="validationCustom04">Date fin</label>
                                    <input type="date" class="date" id="date" placeholder="date de fin" required>
                                    <div class="invalid-feedback">
                                         veuillez rentrer une region valide 
                                    </div>
                                  </div>
                                 
                                </div>
                                <div class="row">
                                  <div class="col-md-6 mb-3">
                                    <label for="validationCustom03">Description</label>
                                    <br>
                                    <textarea id="description" name="description" required></textarea>
                                    
                                  </div>
                                  <div class="col-md-6 mb-3 py-4">
                                  <button type="button" class="btn bgcolor " data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                    <img src="{{asset('img/icon/plus.png') }}" alt="Logo" width="100px" height="100px">
                                    <h5>ajouter un item</h5>
                                    </button>

                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                <div class="row">
                                                <div class="col-md-5 mb-3">
                                    <label for="validationCustom01">Nom de la Campagne</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="prenom" value="" required>                                   
                                                </div>
                                                <div class="col-md-5 mb-3">
                                    <label for="validationCustom01">Nom de la Campagne</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="prenom" value="" required>                                   
                                                </div>

                                  <div class="col-md-6 mb-6">
                                  <div class="color-picker-container">
                                  <label for="colors">Choisir les couleurs :</label>
                                  <input type="color" id="colors" name="colors[]" multiple>
                                  </div>

                                  </div>
                                 
                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Message:</label>
                                                    <textarea class="form-control" id="message-text"></textarea>
                                                </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Send message</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    
                                  </div>
                                  </div>

                                  
          

                                <button class="btn btn-primary" type="submit">valider </button>
                              </form>
                        </div>

                        <script src="js/ColorPicker.js" defer></script>

@endsection