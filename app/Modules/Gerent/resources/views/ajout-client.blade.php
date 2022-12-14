@extends('layouts.master')
@include('layouts.sidebar-gerent')
<style>
    .file-wrapper {
        display: flex;
        justify-content: center;
    }

    .wrapper {
        margin: 30px;
        padding: 10px;
        box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
        border-radius: 10px;
        background-color: white;
        width: 415px;
    }

    /* === Upload Box === */
    .uploader {

    }

    .uploader {
        margin: 10px;
        height: 85px;
        border: 8px dashed #e6f5e9;
        display: flex;

        align-items: center;

        line-height: 0;
        font-size: 22px;
        color: #0c3214;
        letter-spacing: 1.5px;
        width: 375px;

        background-color: #e6f5e9;
        border-radius: 10px;

        flex-direction: row;
        justify-content: center;

    }


</style>
@section('title-page')
Ajouter client
@stop

@section('prev-page')
Clients
@stop
@section('active-page')
Ajouter client
@stop

@section('content')
<form method="post" action="{{route("store-client")}}">
  @csrf
<section class="section profile">
    <div class="row">
      <div class="col-xl-3">

        <div class="card">
          <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="" >
            <div class="btn-groupy" >
                <i class="bi bi-upload"></i>
                <span class="file-wrapper wrapper ">

              <input type="file" name="photo_client" id="imgInp" class="uploader form-control-sm form-control" accept="image/jpg, image/jpeg, image/png" required/>
              </span>

            </div>


          </div>
        </div>

      </div>


      <div class="col-xl-9">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
          <div style="display: flex;place-content: space-between;">
            <h4 class="pt-2">Informations client</h4>
            <div class="form-check form-switch">
              <label for="inputText" class="col-sm-2 col-form-label" style="margin-top: 0;">Active</label>

              <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="status" checked>
            </div>
          </div>






                <div class="row mb-3">

                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Civilit??</label>
                    <select class="form-select" aria-label="Default select example" name="civilit??">
                      <option value="Monsieur" selected>Monsieur</option>
                      <option value="Madame">Madame</option>
                      <option value="Autre">Autre</option>

                    </select>
                  </div>
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Nom </label>
                    <input type="text" class="form-control" name="nom" required>
                  </div>
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Pr??nom </label>
                    <input type="text" class="form-control" name="prenom" required>
                  </div>


                </div>

                <div class="row mb-3">

                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                    <input type="email" class="form-control" name="email" required>
                  </div>
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">T??l??phone </label>
                    <input type="tel" class="form-control" name="telephone">
                  </div>
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Mobile </label>
                    <input type="tel" name="mobile" class="form-control">
                  </div>


                </div>


                <div class="row mb-3">

                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Pays</label>
                    <select class="form-select" aria-label="Default select example" name="pays">
                      <option selected>France</option>
                      <option value="1">Allemagne</option>
                      <option value="2">Espagne</option>

                    </select>
                  </div>
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Ville </label>
                    <input type="text" class="form-control" name="ville">
                  </div>
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Rue </label>
                    <input type="text" class="form-control" name="rue" required>
                  </div>


                </div>
                <h4 class="pt-5">Personne r??f??rente</h4>

                <div class="row mb-3">
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Nom </label>
                    <input type="text" class="form-control" name="refnom">
                  </div>

                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Email </label>
                    <input type="text" class="form-control" name="refemail">
                  </div>
                  <div class="col-sm-4">
                    <label for="inputText" class="col-sm-2 col-form-label">Mobile </label>
                    <input type="text" class="form-control" name="refmobile" >
                  </div>


                </div>










             <!-- End General Form Elements -->
              <div class="text-center pt-4">
                <button type="submit" class=" btn-submit ">Ajouter client</button>
              </div>
          </div>
        </div>

      </div>
    </div>
  </section>
</form>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript">

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