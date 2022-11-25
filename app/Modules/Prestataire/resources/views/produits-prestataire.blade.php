@extends('layouts.master')
@include('layouts.sidebar-prestataire')

@section('content')


<div class="card">
    <div class="card-body">
      <h5 class="card-title"></h5>

      <!-- Pills Tabs -->
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-Shampoings" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Shampoings</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-Soins" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Soins</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-Coiffants" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Coiffants</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-beauté" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Beautés</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-hygiéne" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Hygiéne </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-coloration" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Coloration </button>
          </li>
          
      </ul>

    
      <section class="product_section layout_padding"> 
      <div class="tab-content pt-2" id="myTabContent">
       <!-- Pills shampoings --> 
    <div class="container tab-pane fade show active profile-edit pt-3" id="pills-Shampoings">
       <div class="row">
        <div class="col-md-4 col-lg-4">

          <div class="box">
            <div class="option_container">
               <div class="options">
                  <a href="" class="option1" data-bs-toggle="modal" data-bs-target="#myModal"> 
                  Voir plus
                  </a>
                  <a href="" class="option2">
                  Ajouter au panier
                  </a>
               </div>
            </div>
            <div class="img-box">
              <img src="assets/img/Glycerine3.png" class="card-img-top" alt="...">
            </div>
            <div class="detail-box">
               <h5>
                Créme hydratante
               </h5>
               <h6>
                  $10
               </h6>
            </div>
         </div>

        </div>


     

        </div>
      </div>
  <!-- Pills soins -->
      <div class="container tab-pane fade profile-edit pt-3" id="pills-Soins">
        <div class="row">
        

              <div class="col-md-4 col-lg-4">

                <div class="box">
                  <div class="option_container">
                     <div class="options">
                        <a href="" class="option1"  data-bs-toggle="modal" data-bs-target="#modaldetails">
                        Voir plus
                        </a>
                        <a href="" class="option2">
                        Ajouter au panier
                        </a>
                     </div>
                  </div>
                  <div class="img-box">
                    <img src="assets/img/Glycerine3.png" class="card-img-top" alt="...">
                  </div>
                  <div class="detail-box">
                     <h5>
                      Créme hydratante
                     </h5>
                     <h6>
                        $10
                     </h6>
                  </div>
               </div>

              </div>
 
             
 
      
 
      
         </div>
       </div>

  <!-- Pills coiffants -->
       <div class="container tab-pane fade profile-edit pt-3" id="pills-Coiffants">
        <div class="row">
              <div class="col-md-4 col-lg-4">

                <div class="box">
                  <div class="option_container">
                     <div class="options">
                        <a href="" class="option1"  data-bs-toggle="modal" data-bs-target="#modaldetails">
                        Voir plus
                        </a>
                        <a href="" class="option2">
                        Ajouter au panier
                        </a>
                     </div>
                  </div>
                  <div class="img-box">
                    <img src="assets/img/Glycerine3.png" class="card-img-top" alt="...">
                  </div>
                  <div class="detail-box">
                     <h5>
                      Créme hydratante
                     </h5>
                     <h6>
                        $10
                     </h6>
                  </div>
               </div>

              </div>
         </div>
       </div>

       <!-- Pills Beauté -->
       <div class="container tab-pane fade profile-edit pt-3" id="pills-beauté">
        <div class="row">
              <div class="col-md-4 col-lg-4">

                <div class="box">
                  <div class="option_container">
                     <div class="options">
                        <a href="" class="option1"  data-bs-toggle="modal" data-bs-target="#modaldetails">
                        Voir plus
                        </a>
                        <a href="" class="option2">
                        Ajouter au panier
                        </a>
                     </div>
                  </div>
                  <div class="img-box">
                    <img src="assets/img/Glycerine3.png" class="card-img-top" alt="...">
                  </div>
                  <div class="detail-box">
                     <h5>
                      Créme hydratante
                     </h5>
                     <h6>
                        $10
                     </h6>
                  </div>
               </div>

              </div>
         </div>
       </div>

       <!-- Pills hygiéne --> 
       <div class="container tab-pane fade profile-edit pt-3" id="pills-hygiéne">
        <div class="row">
              <div class="col-md-4 col-lg-4">

                <div class="box">
                  <div class="option_container">
                     <div class="options">
                        <a href="" class="option1"  data-bs-toggle="modal" data-bs-target="#modaldetails">
                        Voir plus
                        </a>
                        <a href="" class="option2">
                        Ajouter au panier
                        </a>
                     </div>
                  </div>
                  <div class="img-box">
                    <img src="assets/img/Glycerine3.png" class="card-img-top" alt="...">
                  </div>
                  <div class="detail-box">
                     <h5>
                      Créme hydratante
                     </h5>
                     <h6>
                        $10
                     </h6>
                  </div>
               </div>

              </div>
         </div>
       </div>
       <!-- Pills colorations -->
       <div class="container tab-pane fade profile-edit pt-3" id="pills-coloration">
        <div class="row">
              <div class="col-md-4 col-lg-4">

                <div class="box">
                  <div class="option_container">
                     <div class="options">
                        <a href="" class="option1"  data-bs-toggle="modal" data-bs-target="#modaldetails">
                        Voir plus
                        </a>
                        <a href="" class="option2">
                        Ajouter au panier
                        </a>
                     </div>
                  </div>
                  <div class="img-box">
                    <img src="assets/img/Glycerine3.png" class="card-img-top" alt="...">
                  </div>
                  <div class="detail-box">
                     <h5>
                      Créme hydratante
                     </h5>
                     <h6>
                        $10
                     </h6>
                  </div>
               </div>

              </div>
         </div>
       </div>
      </section>
    </div>

       
 
     
     <!-- Modal details produits -->
     <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
         
          <div class="modal-body">
            <div class="container mt-5 mb-5">
              <div class="row d-flex justify-content-center">
                  <div class="col-md-10">
                      
                          <div class="row">
                              <div class="col-md-4">
                                  <div class="images">
                                      <div class="text-center"> <img class="main-image"  src="assets/img/Glycerine3.png" width="250" /> </div>
                                      
                                  </div>
                              </div>
                              <div class="col-md-8">
                                  <div class="product p-4">
                                      
                                      <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Marque</span>
                                          <h5 class="text-uppercase">Créme hydratante</h5>
                                          <div class="price d-flex flex-row align-items-center"> <span class="act-price">$20</span>
                                              
                                          </div>
                                      </div>
                                      <p class="about">Shop from a wide range of t-shirt from orianz. Pefect for your everyday use, you could pair it with a stylish pair of jeans or trousers complete the look.</p>
                                      
                                      <div class="cart mt-4 align-items-center"> <button class="btn-submit">Ajouter au panier</button> <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i> </div>
                                  </div>
                              </div> 
                          </div>
                    
                  </div>
              </div>
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          </div>
          
        </div>
      </div>
    </div>
  


        
         

    </div>

@stop