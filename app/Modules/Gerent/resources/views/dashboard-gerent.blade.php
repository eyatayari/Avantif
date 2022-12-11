@extends('layouts.master')
@include('layouts.sidebar-gerent')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="index.html">Dashobard</a></li>

@stop




@section('content')
  
<section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                  <li><a class="dropdown-item" href="#">ce mois-ci</a></li>
                  <li><a class="dropdown-item" href="#">Cette année</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Prestataions <span>| ce mois-ci</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cart"></i>
                  </div>
                  <div class="ps-3">
                    <h6>145</h6>
                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">plus</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

          <!-- Revenue Card -->
          <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                  <li><a class="dropdown-item" href="#">ce mois-ci</a></li>
                  <li><a class="dropdown-item" href="#">Cette année</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Revenue <span>| Ce mois-ci</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-currency-dollar"></i>
                  </div>
                  <div class="ps-3">
                    <h6>$3,264</h6>
                    <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">plus</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Revenue Card -->

          <!-- Customers Card -->
          <div class="col-xxl-4 col-xl-4">

            <div class="card info-card customers-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                  <li><a class="dropdown-item" href="#">ce mois-ci</a></li>
                  <li><a class="dropdown-item" href="#">Cette année</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Clients <span>| ce mois-ci</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>1244</h6>
                    <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">moins</span>

                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->

          <!-- Reports -->
       
<div class="col-12" >
  
 
     

          <!-- Top Selling -->
          
            <div class="card top-selling overflow-auto">

              
              <div class="card-body pb-0">
                <h5 class="card-title">Meilleures ventes <span>| ce mois-ci</span></h5>

                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">Aperçu</th>
                      <th scope="col">Produit</th>
                      <th scope="col">Marque</th>
                      <th scope="col">Catégories</th>
                      <th scope="col">Prix</th>
                      <th scope="col">Nombre de Ventes</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><a href="#"><img src="assets/img/Biosun-Invisible.png" alt=""></a></th>
                      <td><a href="#" class="text-primary fw-bold">Biosun-Invisible</a></td>
                      <td>Roncey pharma</td>
                      <td>soins</td>
                      <td class="fw-bold">45 €</td>
                      <td>5600</td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#"><img src="assets/img/Huile-Capillaire.png" alt=""></a></th>
                      <td><a href="#" class="text-primary fw-bold">Huile-Capillaire</a></td>
                      <td>Avéne</td>
                      <td>Coiffants</td>
                      <td class="fw-bold">120 € </td>
                      <td>508</td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#"><img src="assets/img/Glycerine1.png" alt="Glycerine"></a></th>
                      <td><a href="#" class="text-primary fw-bold">Glycerine végétale</a></td>
                      <td>Nature Bio</td>
                      <td>Soins</td>
                      <td class="fw-bold">14 € </td>
                      <td>450</td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#"><img src="assets/img/Dissolvant.png" alt="Glycerine"></a></th>
                      <td><a href="#" class="text-primary fw-bold">Dissolvant</a></td>
                      <td>Roncey pharma</td>
                      <td>Soins</td>
                      <td class="fw-bold">12 € </td>
                      <td>449</td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#"><img src="assets/img/Biosun-Teinte.png" alt="Glycerine"></a></th>
                      <td><a href="#" class="text-primary fw-bold">Biosun-Teinte</a></td>
                      <td>Nature Bio</td>
                      <td>Soins</td>
                      <td class="fw-bold">46 € </td>
                      <td>449</td>
                    </tr>
                  
                  </tbody>
                </table>

              </div>

            </div>
          <!-- End Top Selling -->

    
   

      <!-- Right side columns -->
     

    </div>
  </section>
@stop