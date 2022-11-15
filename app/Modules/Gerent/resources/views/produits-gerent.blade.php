@extends('layouts.master')
@include('layouts.sidebar-gerent')

@section('content')

  @foreach ($produits as $categorie  => $produit_cat)
    {{$categorie}}
<div class="card">
    <div class="card-body">
      <h5 class="card-title"></h5>

      <!-- Pills Tabs -->
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Shampoings</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Soins</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Coiffants</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Beautés</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Hygiéne </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Coloration </button>
          </li>
          
      </ul>

      <div class="btn-ajout">
        <button type="button" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable">+</button>
      </div>
    
   <div class="tab-content pt-2" id="myTabContent">
        
    <div class="container tab-pane fade show active profile-edit pt-3" id="pills-home">
       <div class="row">
          <div class="col-md-4 col-lg-4"  >
              <!-- Card  -->
                <div class="card">
                  <img src="assets/img/Glycerine3.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Créme hydratante</h5>
                    <p class="card-text">Créme hydratante</p>
                      <div class="card-sec">
                          <a href="#" class="card-link">5 euro</a>
                          <p class="card-text"><a href="#" class="REMOVE">Ajouter au panier</a></p>
                       </div>
                   </div>
                 </div><!-- End Card  -->
             </div>


     

        </div>
      </div>

      <div class="container tab-pane fade profile-edit pt-3" id="pills-profile">
        <div class="row">
           <div class="col-md-4 col-lg-4"  >
               <!-- Card  -->
                 <div class="card">
                   <img src="assets/img/rouge.png" class="card-img-top" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">Créme hydratante</h5>
                     <p class="card-text">Créme hydratante</p>
                       <div class="card-sec">
                           <a href="#" class="card-link">5 euro</a>
                           <p class="card-text"><a href="#" class="REMOVE">Ajouter au panier</a></p>
                        </div>
                    </div>
                  </div><!-- End Card  -->
              </div>
 
              <div class="col-md-4 col-lg-4"  >
               <!-- Card  -->
                 <div class="card">
                   <img src="assets/img/rose.png" class="card-img-top" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">Créme hydratante</h5>
                     <p class="card-text">Créme hydratante</p>
                       <div class="card-sec">
                           <a href="#" class="card-link">5 euro</a>
                           <p class="card-text"><a href="#" class="REMOVE">Ajouter au panier</a></p>
                        </div>
                    </div>
                  </div><!-- End Card  -->
              </div>
 
      
 
      
         </div>
       </div>
    </div>
       
    

        <!-- Modal Dialog Scrollable -->
      
        <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Ajouter produit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="row g-3">
                  <div class="col-12">
                    <label for="inputNanme4" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="inputNanme4">
                  </div>
                  <div class="col-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>
                  <div class="col-12">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Catégories</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  </div>
                  
                </form><!-- Vertical Form -->
  
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Ajouter produit</button>
              </div>
            </div>
          </div>
        </div><!-- End Modal Dialog Scrollable-->

     

        
         

    </div>
  </div>
  @endforeach
@stop