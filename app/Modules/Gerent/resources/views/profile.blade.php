@extends('layouts.master')
@include('layouts.sidebar-gerent')
@section('title-page')
Mon Profil
@stop

@section('prev-page')
Mon profil
@stop 


@section('content')
<section class="section profile">
    <div class="row">
      <div class="col-xl-3">

        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="assets/img/gerent/{{$gerent->image}}" alt="Profile" class="rounded-circle">
            <h2>{{$gerent->nom}} {{$gerent->prenom}}</h2>
            
            
          </div>
        </div>

      </div>

      <div class="col-xl-9">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Aperçu</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Modifier profile</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Modifier mot de passe</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                
                <h5 class="card-title">Détails</h5>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Nom et prénom</div>
                  <div class="col-lg-9 col-md-8">{{$gerent->nom}} {{$gerent->prenom}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Entreprise</div>
                  <div class="col-lg-9 col-md-8">Avantif</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Code</div>
                  <div class="col-lg-9 col-md-8">000{{$gerent->id}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Pays</div>
                  <div class="col-lg-9 col-md-8">{{$gerent->pays}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Addresse</div>
                  <div class="col-lg-9 col-md-8">{{$gerent->adresse}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Mobile</div>
                  <div class="col-lg-9 col-md-8">{{$gerent->mobile}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email</div>
                  <div class="col-lg-9 col-md-8">{{$gerent->email}}</div>
                </div>

              </div>

              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                <!-- Profile Edit Form -->
                <form method="post" action="{{route('update-gerent',['id'=>$gerent->id])}}">
                  @csrf
                  @method("PATCH")
                  <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                    <div class="col-md-8 col-lg-9">
                      <img src="assets/img/gerent/{{$gerent->image}}" alt="Profile" >
                      <div class="pt-2">
                        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nom </label>
                    <div class="col-md-8 col-lg-9">
                      <input name="nom" type="text" class="form-control" id="fullName" value="{{$gerent->nom}}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Prénom : </label>
                    <div class="col-md-8 col-lg-9">
                      <input name="prenom" type="text" class="form-control" id="fullName" value="{{$gerent->prenom}}">
                    </div>
                  </div>

              

                  <div class="row mb-3">
                    <label for="Country" class="col-md-4 col-lg-3 col-form-label">Pays</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="country" type="text" class="form-control" id="Country" value="{{$gerent->pays}}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Addresse</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="addresse" type="text" class="form-control" id="Address" value="{{$gerent->addresse}}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Mobile</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="mobile" type="text" class="form-control" id="Phone" value="{{$gerent->mobile}}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="email" type="email" class="form-control" id="Email" value="{{$gerent->email}}">
                    </div>
                  </div>


                  <div class="text-center">
                    <button type="submit" class="btn-submit">Enregistrer</button> 
                  </div>
                </form><!-- End Profile Edit Form -->

              </div>

  

              <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Change Password Form -->
                <form>

                  <div class="row mb-3">
                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Mot de passe actuel</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="password" type="password" class="form-control" id="currentPassword">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Nouveau mot de passe</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="newpassword" type="password" class="form-control" id="newPassword">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Ré-entrez le nouveau mot de passe</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn-submit">Changer</button>
                  </div>
                </form><!-- End Change Password Form -->

              </div>

            </div><!-- End Bordered Tabs -->

          </div>
        </div>

      </div>
    </div>
  </section>
@stop