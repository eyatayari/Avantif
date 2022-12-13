@extends('layouts.master')
@include('layouts.sidebar-client')
@section('title-page')
Rendez-vous
@stop


@section('breadcrumb')
<li class="breadcrumb-item"><a href="index.html">Dashobard</a></li>
<li class="breadcrumb-item">Nouveau rendez-vous</li>

@stop

@section('content')

<section class="section dashboard">
    <div class="row">
      <!-- Left side columns -->
      <div class="">
        <div class="row">
          <div class="card col-lg-8">
            <div class="card-body">
              <h5 class="card-title">
                A vous de jouer, choisissez vos services !
              </h5>

              <!-- Bordered Tabs Justified -->
              <ul
                class="nav nav-tabs nav-tabs-bordered d-flex"
                id="borderedTabJustified"
                role="tablist"
              >
                <li class="nav-item flex-fill" role="presentation">
                  <button
                    class="nav-link w-100 active"
                    id="home-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#bordered-justified-home"
                    type="button"
                    role="tab"
                    aria-controls="home"
                    aria-selected="true"
                  >
                   coiffure
                  </button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button
                    class="nav-link w-100"
                    id="profile-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#bordered-justified-profile"
                    type="button"
                    role="tab"
                    aria-controls="profile"
                    aria-selected="false"
                  >
                    Soins esthétiques
                  </button>
                </li>
            
              </ul>
              <div
                class="tab-content pt-2"
                id="borderedTabJustifiedContent"
              >
                <div
                  class="tab-pane fade show active"
                  id="bordered-justified-home"
                  role="tabpanel"
                  aria-labelledby="home-tab"
                >
                  <div class="card-body">
                    <h5 class="card-title">Classique</h5>

                    <!-- List group with Advanced Contents -->
                    <div class="list-group">
                      <a
                        href="#"
                        class="list-group-item list-group-item-action"
                        aria-current="true"
                      >
                        <div class="d-flex w-100 justify-content-between">
                          <h6 class="mb-1">Shampoing</h5>
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            </div>
                          
                        </div>
                        <p class="mb-1">
                          <small class="text-muted">3dt ● 10min</small>
                        </p>
                       
                      </a>
                      <a
                        href="#"
                        class="list-group-item list-group-item-action"
                      >
                        <div class="d-flex w-100 justify-content-between">
                          <h6 class="mb-1">Brushing</h5>
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            </div>
                        </div>
                        <p class="mb-1">
                          <small class="text-muted">3dt ● 10min</small>
                        </p>
                       
                      </a>
                      <a
                        href="#"
                        class="list-group-item list-group-item-action"
                      >
                        <div class="d-flex w-100 justify-content-between">
                          <h6 class="mb-1">Shampoing</h5>
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            </div>
                        </div>
                        <p class="mb-1">
                          <small class="text-muted">3dt ● 10min</small>
                        </p>
                       
                      </a>
                    </div>
                    <!-- End List group Advanced Content -->
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="bordered-justified-profile"
                  role="tabpanel"
                  aria-labelledby="profile-tab"
                >
                  Nesciunt totam et. Consequuntur magnam aliquid eos nulla
                  dolor iure eos quia. Accusantium distinctio omnis et atque
                  fugiat. Itaque doloremque aliquid sint quasi quia
                  distinctio similique. Voluptate nihil recusandae mollitia
                  dolores. Ut laboriosam voluptatum dicta.
                </div>
                <div
                  class="tab-pane fade"
                  id="bordered-justified-contact"
                  role="tabpanel"
                  aria-labelledby="contact-tab"
                >
                  Saepe animi et soluta ad odit soluta sunt. Nihil quos
                  omnis animi debitis cumque. Accusantium quibusdam
                  perspiciatis qui qui omnis magnam. Officiis accusamus
                  impedit molestias nostrum veniam. Qui amet ipsum iure.
                  Dignissimos fuga tempore dolor.
                </div>
              </div>
              <!-- End Bordered Tabs Justified -->
            </div>
            <button type="submit" class="btn btn-send mb-4"><a href ="{{route("reservation3")}}">Suivant</a></button>
          </div>
        

        <div class="col-lg-4">
          <!-- Website Traffic -->
          <div class="card">
            <div class="filter">
              
              <ul
                class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
              >
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0 mb-4">
              <h5 class="card-title">
                Mon panier
              </h5>

              <div class="list-group">
                <a
                  href="#"
                  class="list-group-item list-group-item-action"
                  aria-current="true"
                >
                <div class="d-flex w-100 justify-content-between">
                  <img src="assets/img/shopping-cart.png" class="cartIcons" alt="">
                  <h5 class="mb-1 cart-text">                          
                    Vos services</h5>
                    <i class="bi bi-caret-up"></i>

                </div>
                <p class="mb-1 mr-2">
                  <small class="text-muted">Femme</small>
                </p>
                  
                </a>
                <a
                  href="#"
                  class="list-group-item list-group-item-action"
                >

                  <div class="d-flex w-100 justify-content-between">
                    <img src="assets/img/location-sign.png" class="cartIcons" alt="">
                    <h6 class="mb-1 cart-text">                          
                      Autoroute A1 - Km 2 – Délégation de Boumhel Ben Arous, 2097</h5>
                      <i class="bi bi-caret-down"></i>
                     
                  </div>
                  

                  
                  
                </a>
               
              </div>

            </div>
          </div>
          <!-- End Website Traffic -->
        </div>
        </div>
      </div>
      <!-- End Left side columns -->
    </div>
  </section>

@stop