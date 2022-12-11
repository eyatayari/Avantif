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

  
      <!-- -----------------------Dashboard Section-->
      <section class="section dashboard">
        <div class="row">
          <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
              <div class="row">
                <!-- Customers Card -->
                <div class="col-xxl-8 col-xl-8">
                  <div class="card info-card customers-card">
                    <div class="filter">
                      <a class="icon" href="#" data-bs-toggle="dropdown"
                        ><i class="bi bi-three-dots"></i
                      ></a>
                      <ul
                        class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                      >
                        <li class="dropdown-header text-start">
                          <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li>
                          <a class="dropdown-item" href="#">This Month</a>
                        </li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                      </ul>
                    </div>

                    <div class="card-body">
                      <h5 class="card-title">
                        Ou aura lieu votre rendez-vous coiffure ?
                      </h5>
                      <p>
                        Notre mission : prendre soin de vous, chez nous, partout
                        en Tunisie.
                      </p>

                      <div class="d-flex align-items-center">
                        <div
                          class="d-flex align-items-center justify-content-center"
                        >
                          <img
                            class="undrawImg"
                            src="assets/img/undraw_House_searching_re_stk8.png"
                            alt=""
                          />
                        </div>
                        <div class="col-md-5">
                          <label for="inputCity" class="form-label">Votre adresse compléte </label>
                          <input type="text" class="form-control" id="inputCity">
                          <h5 class="card-title">
                            Adresse récentes</h6>
  
                            <span class="text-muted small pt-2 ps-1"
                              >Connectez-vous pour afficher vos adresses récentes</span
                            >

                            <button type="submit" class="btn btn-send ">c'est parti !</button>
                        </div>
                        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4">
                    <!-- Website Traffic -->
                    <div class="card">
                      <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"
                          ><i class="bi bi-three-dots"></i
                        ></a>
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
      
                      <div class="card-body pb-0">
                        <h5 class="card-title">
                          Mon panier
                        </h5>
      
                        <div class="d-flex align-items-center justify-content-center">
                          <img class="undrawImg2" src="assets/img/undraw_empty_cart_co35.png" alt="">
                        </div>
      
                      </div>
                    </div>
                    <!-- End Website Traffic -->
                  </div>
                
                </div>
                <!-- End Customers Card -->
              </div>
            </div>
            <!-- End Left side columns -->

          
          </div>
        </div>
      </section>

@stop