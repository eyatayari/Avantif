@extends('layouts.master') 

@include('layouts.sidebar-prestataire')
@section('title-page')
Ajouter facture
@stop

@section('breadcrumb')
<li class="breadcrumb-item"><a href="index.html">Dashobard</a></li>
<li class="breadcrumb-item">Factures</li>
<li class="breadcrumb-item active">Ajouter facture</li> 
@stop

@section('content')
 <section class="section profile">
      <div class="row">
      

        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

              

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#one">Détails  </button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#two">Personne référente </button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#three">Lignes de facture</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

              
                <div class="tab-pane fade show active profile-edit pt-3" id="one">

                  <!-- Profile Edit Form -->
                  <form>
                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Facture N°</label>
                      <div class="col-md-8 col-lg-9">
                        <span> 0000333 </span>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Photos                       <span> Types de fichiers autorisés : png, jpg, jpeg </span>
                      </label>
                      <div class="col-md-4 col-lg-4" >
                        <img id="photos" src="" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class=" btnUpload btn-sm" title="Upload new profile image">Photo  avant <i class="bi bi-upload"></i></a>
                        </div>
                      </div>
                      <div class="col-md-4 col-lg-4" >
                        <img src="assets/img/profile-img.jpg" id="photos" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class=" btnUpload btn-sm" title="Upload new profile image"> Photo aprés <i class="bi bi-upload"></i></a>
                        </div>
                      </div>
                    </div>
                   
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Date</label>
                      <div class="col-md-8 col-lg-9">
                        <input  type="date" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    

                     

                   

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Client</label>
                      <div class="col-md-8 col-lg-9">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>Samar mediouni</option>
                          <option value="1">Siwar mediouni</option>
                          <option value="2">salwa bejaoui</option>
                        
                         
                        </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Mode de paiement</label>
                      <div class="col-md-8 col-lg-9">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>Espéces</option>
                          <option value="1">Virement</option>
                          <option value="2">Chéques</option>
                        
                         
                        </select>
                      </div>
                    </div>

                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="two">

                  <!-- Settings Form -->
                  <form>

                    

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nom</label>
                      <div class="col-md-8 col-lg-9">
                        <input  type="text" class="form-control" id="fullName" value="">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Prenom</label>
                      <div class="col-md-8 col-lg-9">
                        <input  type="text" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Teléphone</label>
                      <div class="col-md-8 col-lg-9">
                        <input  type="text" class="form-control" id="fullName" value="">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input  type="email" class="form-control" id="fullName" value="">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Adresse</label>
                      <div class="col-md-8 col-lg-9">
                        <input  type="text" class="form-control" id="fullName" value="">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Envoyer les photos</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="form-check form-switch" style="padding-left: 55px;" >
                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                          <label class="form-check-label" style="margin: 0 margin-top: 10px;" for="flexSwitchCheckDefault">Active</label>
                        </div>
                      </div>
                   
                  </div>

                  </form><!-- End settings Form -->

                </div>

                <div class="tab-pane fade pt-3" id="three">
                  <div class="row mb-6">
                    <BODY>

                      <div class="buttonsGroup"> 
                        <INPUT type="button" class="ADD btn-sm AddRemove" value="+" onclick="addRow('dataTable')" />
                        <INPUT type="button" class="REMOVE btn-sm AddRemove" value="-" onclick="deleteRow('dataTable')" />
                      </div>
                    
                      <TABLE id="dataTable" >
                        <tr><th>Prestation</th><th>Qté</th><th>Tarif HT</th> <th>TVA</th><</tr>
                        <TR >

                          <TD class="form-control addRInputs">
                            <select  class="form-control">
                              @foreach($prestations as $prestation)
                            <option class="form-control addRInputs">{{$prestation->name}}
                            </option>
                                @endforeach
                            </select>

                          </TD>
                          <TD>
                              <input type="number" class="form-control addRInputs" min="1" name="qte" >

                          <TD>
                              <input type="number" class="form-control "  >{{$prestation->price}}

                        <TD>
                            <input type="number" class="form-control "  >
                        </TD>
                         </TR>
                      </TABLE>
                    
                    </BODY>
                  </div>

                </div>

              </div><!-- End Bordered Tabs -->
              <div class="text-center">
                <button type="submit" class=" btn-submit">Valider</button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
@stop  