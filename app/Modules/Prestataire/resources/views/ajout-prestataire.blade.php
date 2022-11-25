<<<<<<< HEAD:app/Modules/Gerent/resources/views/ajout-prestataire.blade.php
=======

>>>>>>> 6bd69e1a9ebfca9f78be77e4e5b9e2845bbdebaa:app/Modules/Prestataire/resources/views/ajout-prestataire.blade.php
@extends('layouts.master')
@include('layouts.sidebar-gerent')
@section('title-page')
Ajouter prestataire
@stop

@section('prev-page')
Clients
@stop 
@section('active-page')
Ajouter client
@stop

@section('content')

<section class="section profile">
    <div class="row">
      <div class="col-xl-3">

        <div class="card">
          <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="">
            <div class="btn-groupy" >
              <a href="#" class="ADD btn-sm AddRemove" title="Upload new profile image"><i class="bi bi-upload"></i></a>
              <a href="#" class="REMOVE btn-sm AddRemove" title="Remove my profile image"><i class="bi bi-trash"></i></a>
            </div>
            
            
          </div>
        </div>

      </div>
    

      <div class="col-xl-9">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->

            <h4>Informations Prestatire</h4>
            <form action="{{route("store-prestataire")}}">
              @Csrf
              <div class="row mb-3">
                
                  <div class="form-check form-switch">
                      <label for="inputText" class="col-sm-2 col-form-label">Active</label>
                      
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                      
               
                   
                </div>
              </div>

                <div class="row mb-3">
                 
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Civilité</label>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Monsieur</option>
                      <option value="1">Madame</option>
                      <option value="2">Monsieur</option>
                     
                    </select>
                  </div>
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Nom </label>
                    <input type="text" class="form-control"required>
                  </div>
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Prénom </label>
                    <input type="text" class="form-control" required>
                  </div>
                
                  
                </div>

                <div class="row mb-3">
                 
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Monsieur</option>
                      <option value="1">Madame</option>
                      <option value="2">Monsieur</option>
                     
                    </select>
                  </div>
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Téléphone </label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Mobile </label>
                    <input type="text" class="form-control">
                  </div>
                
                  
                </div>


                <div class="row mb-3">
                 
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Pays</label>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>France</option>
                      <option value="1">Allemagne</option>
                      <option value="2">Espagne</option>
                     
                    </select>
                  </div>
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Ville </label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Rue </label>
                    <input type="text" class="form-control"required>
                  </div>
                
                  
                </div>
               



            
            
                
                
                
          

              </form><!-- End General Form Elements -->
              <div class="text-center pt-4">
                <button type="submit" class=" btn-submit ">Ajouter Prestataire</button>
              </div>
          </div>
        </div>

      </div>
    </div>
  </section>
@stop  