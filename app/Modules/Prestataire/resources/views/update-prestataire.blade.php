@extends('layouts.master')
@include('layouts.sidebar-gerent')
@section('title-page')
Modifier prestataire
@stop

@section('prev-page')
Clients
@stop 
@section('active-page')
Ajouter client
@stop

@section('content')

<section class="section profile">
  <form action="{{route("update-prestataire",['id'=>$prestataire->id])}}" method="post" id="form" enctype="multipart/form-data">
    @Csrf
    @method('Patch')
    <div class="row">


      <div class="col-xl-9">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->

            <h4>Informations Prestataire</h4>

              <div class="row mb-3">
                
                  <div class="form-check form-switch">
                      <label for="inputText" class="col-sm-2 col-form-label">Active</label>
                      
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="statut" @if($prestataire->statut=="1") checked @endif>
                      
               
                   
                </div>
              </div>

                <div class="row mb-3">
                 
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Civilité</label>
                    <select class="form-select" aria-label="Default select example" name="civilité">
                      <option value="Monsieur" selected>Monsieur</option>
                      <option value="Madame">Madame</option>
                      <option value="Autre">Autre</option>
                     
                    </select>
                  </div>
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label" >Nom </label>
                    <input type="text" class="form-control" name="nom" required  value="{{$prestataire->nom}}">
                  </div>
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label" >Prénom </label>
                    <input type="text" class="form-control" required name="prenom" value="{{$prestataire->prenom}}">
                  </div>
                
                  
                </div>

                <div class="row mb-3">
                 
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                    <input type="text" class="form-control" required name="email" value="{{$prestataire->email}}">
                  </div>
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Téléphone </label>
                    <input type="text" class="form-control" name="telephone" value="{{$prestataire->telephone}}">
                  </div>



                  
                </div>


                <div class="row mb-3">
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Adresse </label>
                    <input type="text" class="form-control" name="adresse" value="{{$prestataire->adresse}}">
                  </div>
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Pays</label>
                    <select class="form-select" aria-label="Default select example" name="pays">

                        <option value="France" @if($prestataire->pays=="France") selected @endif >France</option>
                      <option value="Allemagne" @if($prestataire->pays=="Allemagne") selected @endif >Allemagne</option>
                      <option value="Espagne" @if($prestataire->pays=="Espagne") selected @endif >Espagne</option>
                     
                    </select>
                  </div>


                
                  
                </div>









              <div class="text-center pt-4">
                <button type="submit" class=" btn-submit ">Modifier Prestataire</button>
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


@stop