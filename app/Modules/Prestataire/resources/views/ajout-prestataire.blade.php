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
  <form action="{{route("store-prestataire")}}" method="post" id="form" enctype="multipart/form-data">
    @Csrf
    <div class="row">
      <div class="col-xl-3">

        <div class="card">
          <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="">
            <!--<div class="btn-groupy" >
               <a href="#" class="ADD btn-sm AddRemove" title="Upload new profile image"><i class="bi bi-upload"></i></a>
               <a href="#" class="REMOVE btn-sm AddRemove" title="Remove my profile image"><i class="bi bi-trash"></i></a>
             </div>

            -->
            <span class="file-wrapper ">
            <input type="file" name="image_pres" id="imgInp" class="uploader " accept="image/jpg, image/jpeg, image/png" required/>
            </span>
            
            
          </div>
        </div>

      </div>
    

      <div class="col-xl-9">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->

            <h4>Informations Prestatire</h4>

              <div class="row mb-3">
                
                  <div class="form-check form-switch">
                      <label for="inputText" class="col-sm-2 col-form-label">Active</label>
                      
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="statut" checked>
                      
               
                   
                </div>
              </div>

                <div class="row mb-3">
                 
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Civilité</label>
                    <select class="form-select" aria-label="Default select example" name="civilité">
                      <option selected>Monsieur</option>
                      <option value="1">Madame</option>
                      <option value="2">Monsieur</option>
                     
                    </select>
                  </div>
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label" >Nom </label>
                    <input type="text" class="form-control" name="nom" required>
                  </div>
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label" >Prénom </label>
                    <input type="text" class="form-control" required name="prenom">
                  </div>
                
                  
                </div>

                <div class="row mb-3">
                 
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                    <input type="text" class="form-control" required name="email">
                  </div>
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Téléphone </label>
                    <input type="text" class="form-control" name="telephone">
                  </div>

                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Login </label>
                    <input type="text" class="form-control" name="login">
                  </div>

                  
                </div>


                <div class="row mb-3">
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Adresse </label>
                    <input type="text" class="form-control" name="adresse">
                  </div>
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Pays</label>
                    <select class="form-select" aria-label="Default select example" name="pays">
                      <option selected>France</option>
                      <option value="1">Allemagne</option>
                      <option value="2">Espagne</option>
                     
                    </select>
                  </div>


                
                  
                </div>









              <div class="text-center pt-4">
                <button type="submit" class=" btn-submit ">Ajouter Prestataire</button>
              </div>
          </div>
        </div>
      </div>
    </div>
            </form>
              <!-- End General Form Elements -->


</section>


<script>

    /*----------------------------------------
    Upload btn
    ------------------------------------------*/



    $('.file-wrapper input[type=file]').bind('change focus click', SITE.fileInputs);

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            var tmppath = URL.createObjectURL(event.target.files[0]);

            reader.onload = function (e) {
                $('#img-uploaded').attr('src', e.target.result);
                $('input.img-path').val(tmppath);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".uploader").change(function(){
        readURL(this);
    });
</script>
@stop