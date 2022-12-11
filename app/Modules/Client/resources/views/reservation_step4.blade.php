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
              <h5 class="card-title">
                Quelles sont vos diponibilités ?
              </h5>
              
                <div class="row">
                  <div class="col-lg-4">
                    <div class="pro-bloc2">
                      <h6 class="mb-1" style="color: #183271;">Aujourd'hui</h6>
                        <p class="mb-1">
                          <small class="text-muted">
                           Lun 21. nov.
                          </small>
                        </p>
                        <i class="bi bi-arrow-up-circle-fill" id="active2"></i>
                      </div>
                </div>
                <div class="col-lg-4">
                  <div class="pro-bloc2">
                    <h6 class="mb-1" style="color: #183271;">Aujourd'hui</h6>
                      <p class="mb-1">
                        <small class="text-muted">
                         Lun 21. nov.
                        </small>
                      </p>
                      <i class="bi bi-arrow-up-circle-fill" id="active2"></i>
                    </div>
              </div>
              <div class="col-lg-4">
                <div class="pro-bloc3">
                  <h6 class="mb-1" style="color: #183271;">Aujourd'hui</h6>
                    <p class="mb-1">
                      <small class="text-muted">
                       Lun 21. nov.
                      </small>
                    </p>
                    <i class="bi bi-arrow-up-circle-fill" id="active2"></i>
                  </div>
            </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="pro-bloc3">
                    <h6 class="mb-1" style="color: #183271;">Aujourd'hui</h6>
                      <p class="mb-1">
                        <small class="text-muted">
                         Lun 21. nov.
                        </small>
                      </p>
                      <i class="bi bi-arrow-up-circle-fill" id="active2"></i>
                    </div>
              </div>
              <div class="col-lg-4">
                <div class="pro-bloc2">
                  <h6 class="mb-1" style="color: #183271;">Aujourd'hui</h6>
                    <p class="mb-1">
                      <small class="text-muted">
                       Lun 21. nov.
                      </small>
                    </p>
                    <i class="bi bi-arrow-up-circle-fill" id="active2"></i>
                  </div>
            </div>
            <div class="col-lg-4">
              <div class="pro-bloc2">
                <h6 class="mb-1" style="color: #183271;">Aujourd'hui</h6>
                  <p class="mb-1">
                    <small class="text-muted">
                     Lun 21. nov.
                    </small>
                  </p>
                  <i class="bi bi-arrow-up-circle-fill" id="active2"></i>
                </div>
          </div>
            </div>
                    
                    
                    <button type="submit" class="btn btn-send mb-4">Passer</button>
            
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
              >

                <div class="d-flex w-100 justify-content-between">
                  <i class="bi bi-person-fill" style="color: #ce152b;  width: 14px;
                  margin-right: 8px;
                  height: fit-content;"></i>

                  <h6 class="mb-1 cart-text">                          
                    Seulement avec liy</h5>
                    <i class="bi bi-caret-down"></i>
                   
                </div>
                

                
                
              </a>
                <a
                  href="#"
                  class="list-group-item list-group-item-action"
                  aria-current="true"
                >
                <div class="d-flex w-100 justify-content-between">
                  <img src="assets/img/shopping-cart.png" class="cartIcons" alt="">
                  
                    <div class="pro-bloc">
                      
                      <h5 class="mb-1 cart-text">                          
                        2 services</h5>
                     
                        

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
                  <i class="bi bi-alarm-fill" style="color: #ce152b;  width: 14px;
                  margin-right: 8px;
                  height: fit-content;"></i>

                  <h5 class="mb-1 cart-text">                          
                    Disponibilités</h5>
                    <i class="bi bi-caret-down"></i>
                   
                </div>
                
                <small class="text-muted" style="font-size:12px;">psum has been the industry's psum has been the industry's</small>

                
                
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