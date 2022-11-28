
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
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#two">Lignes de facture </button>
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

                  <article>
                    <h1>Recipient</h1>
                    <table class="meta">
                      <tr>
                        <th><span>Facture #</span></th>
                        <td><span contenteditable></span></td>
                      </tr>
                      <tr>
                        <th><span>Date</span></th>
                        <td><span contenteditable></span></td>
                      </tr>
                      <tr>
                        <th><span>Montant dû</span></th>
                        <td><span id="prefix" contenteditable>€</span><span></span></td>
                      </tr>
                    </table>
                    <table class="inventory">
                      <thead>
                        <tr>
                          <th><span>Prestataion</span></th>
                          <th><span>Description</span></th>
                          <th><span>Montant</span></th>
                          <th><span>Quantité</span></th>
                          <th><span>Prix HT</span></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a class="cut">-</a><span contenteditable></span></td>
                          <td><span contenteditable></span></td>
                          <td><span data-prefix>€</span><span contenteditable></span></td>
                          <td><span contenteditable>1</span></td>
                          <td><span data-prefix>€</span><span></span></td>
                        </tr>
                      </tbody>
                    </table>
                    <a class="add">+</a>
                    <table class="balance">
                      <tr>
                        <th><span>Montant total HT</span></th>
                        <td><span data-prefix>€</span><span>0.00</span></td>
                      </tr>
                      <tr>
                        <th><span>Montant payé</span></th>
                        <td><span data-prefix>€</span><span contenteditable>0.00</span></td>
                      </tr>
                      <tr>
                        <th><span>Total HT</span></th>
                        <td><span data-prefix>€</span><span>0.00</span></td>
                      </tr>
                    </table>
                  </article>

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
<link href="{{asset('assets/css/style-facture.css')}}" rel="stylesheet" type="text/css">
<script type="text/javascript" src="{{ URL::asset('assets/js/script-facture.js') }}"></script>