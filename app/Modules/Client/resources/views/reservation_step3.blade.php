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
                2 coiffures prés de chez vous, faites votre sélection :
              </h5>
                    <!-- List group with Advanced Contents -->
                    <div class="list-group">
                  
                      <a
                        href="#"
                        class="list-group-item list-group-item-action"
                      >
                        <div class="d-flex w-100 justify-content-between">
                          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" style="width:55px;height: fit-content;">
                          <div class="pro-bloc">
                          <h6 class="mb-1">Name Last name</h5>
                            <small class="text-muted spann"  >
                              Disponible Dés Aujourd'hui
                            </small>
                            <p class="mb-1">
                              <small class="text-muted" >
                                <i class="bi bi-star-fill" style="color: #ce152b;"></i>
                                4.9/5
                              </small>
                            </p>
                          </div>
                          <i class="bi bi-caret-down"></i>

                        </div>
                        
                        
                      </a>
                      <a
                        href="#"
                        class="list-group-item list-group-item-action"
                      >
                        <div class="d-flex w-100 justify-content-between">
                          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" style="width:55px;height: fit-content;">
                          <div class="pro-bloc">
                          <h6 class="mb-1">Name Last name</h5>
                            <small class="text-muted spann"  >
                              Disponible Dés Aujourd'hui
                            </small>
                            <p class="mb-1">
                              <small class="text-muted" >
                                <i class="bi bi-star-fill" style="color: #ce152b;"></i>
                                4.9/5
                              </small>
                            </p>
                          </div>
                          <i class="bi bi-caret-down"></i>

                        </div>
                        
                        
                      </a>
                    </div>
                    <!-- End List group Advanced Content -->
                    <div class="alert alert-primary alert-danger fade show mt-4" role="alert">
                      <h4 class="alert-heading">Passer et laisser Avantif choisir 
                      </h4>
                      <p> Avantif séléctionnera le meilleur coiffeur selon vos dispo.</p>
                      <i class="bi bi-arrow-right"></i>

                    </div>
                    <button type="submit" class="btn btn-send mb-4"><a href="{{route('reservation4')}}"> Passer</a></button>
            </div>
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
                  
                    <div class="pro-bloc">
                      
                        <small class="text-muted spann"  >
                          2 services
                          
                        </small>
                        

                        <p class="mb-1">
                          <small class="text-muted">
                            <i class="bi bi-cash" style="color: #ce152b;"></i>
                            22 dt</small>
                          <small class="text-muted" >
                            <i class="bi bi-alarm" style="color: #ce152b;"></i>
                            20 m
                          </small>
                        </p>

                      </div>
                    <i class="bi bi-caret-down"></i>

                </div>
                <p class="mb-1 mr-2">
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