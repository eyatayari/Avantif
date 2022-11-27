@extends('layouts.master')
@include('layouts.sidebar-gerent')

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

      <div class="btn-ajout">
        <button type="button" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable">+</button>
      </div>
    
      <section class="product_section layout_padding"> 
        <div class="tab-content pt-2" id="myTabContent">
         <!-- Pills shampoings -->

      <div class="container tab-pane fade show active profile-edit pt-3" id="pills-Shampoings">


         <div class="row">

             @foreach ($Shampoings as $shampoing)
             <div class="col-md-4 col-lg-4">

            <div class="box">

              <div class="option_container">
                 <div class="options">
                    <a href="" class="option1" data-bs-toggle="modal" data-bs-target="#myModal{{$shampoing->id}}">
                    Voir plus
                    </a>
                    <a href="" class="option2">
                    Ajouter au panier
                    </a>
                 </div>
              </div>
              <div class="img-box">
                <img src="{{asset("assets/img/produits/".$shampoing->photo_produit)}}" class="card-img-top" alt="...">
              </div>
              <div class="detail-box">
                 <h5>
                 {{$shampoing->nom_produit}}
                 </h5>
                 <h6>
                    {{$shampoing->prix}} DT
                 </h6>
              </div>
           </div>
  
          </div>



                 <!-- Modal details produits -->
                 <div class="modal fade" id="myModal{{$shampoing->id}}" role="dialog">
                     <div class="modal-dialog modal-lg">
                         <div class="modal-content">

                             <div class="modal-body">
                                 <div class="container mt-5 mb-5">
                                     <div class="row d-flex justify-content-center">
                                         <div class="col-md-10">

                                             <div class="row">
                                                 <div class="col-md-4">
                                                     <div class="images">
                                                         <div class="text-center"> <img class="main-image"  src="{{asset("assets/img/produits/".$shampoing->photo_produit)}}" width="250" /> </div>

                                                     </div>
                                                 </div>
                                                 <div class="col-md-8">
                                                     <div class="product p-4">

                                                         <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">{{$shampoing->marque}}</span>
                                                             <h5 class="text-uppercase">{{$shampoing->nom_produit}}</h5>
                                                             <div class="price d-flex flex-row align-items-center"> <span class="act-price">{{$shampoing->prix}} DT</span>

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


             @endforeach

  
          </div>
        </div>


    <!-- Pills soins -->

        <div class="container tab-pane fade profile-edit pt-3" id="pills-Soins">


          <div class="row">

              @foreach ($Soins as $soin)
                <div class="col-md-4 col-lg-4">

                  <div class="box">
                    <div class="option_container">
                       <div class="options">
                          <a href="" class="option1"  data-bs-toggle="modal" data-bs-target="#modaldetails{{$soin->id}}">
                          Voir plus
                          </a>
                          <a href="" class="option2">
                          Ajouter au panier
                          </a>
                       </div>
                    </div>
                    <div class="img-box">
                      <img src="{{asset("assets/img/produits/".$soin->photo_produit)}}" class="card-img-top" alt="...">
                    </div>
                    <div class="detail-box">
                       <h5>
                        {{$soin->nom_produit}}
                       </h5>
                       <h6>
                           {{$soin->prix}}
                       </h6>
                    </div>
                 </div>

                </div>


                  <!-- Modal details produits -->
                  <div class="modal fade" id="myModal{{$soin->id}}" role="dialog">
                      <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                              <div class="modal-body">
                                  <div class="container mt-5 mb-5">
                                      <div class="row d-flex justify-content-center">
                                          <div class="col-md-10">

                                              <div class="row">
                                                  <div class="col-md-4">
                                                      <div class="images">
                                                          <div class="text-center"> <img class="main-image"  src="{{asset("assets/img/produits/".$soin->photo_produit)}}" width="250" /> </div>

                                                      </div>
                                                  </div>
                                                  <div class="col-md-8">
                                                      <div class="product p-4">

                                                          <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">{{$soin->marque}}</span>
                                                              <h5 class="text-uppercase">{{$soin->nom_produit}}</h5>
                                                              <div class="price d-flex flex-row align-items-center"> <span class="act-price">{{$soin->prix}} DT</span>

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
              @endforeach

   
        
           </div>


         </div>


    <!-- Pills coiffants -->
         <div class="container tab-pane fade profile-edit pt-3" id="pills-Coiffants">


          <div class="row">
              @foreach ($Coiffants as $coiffant)
                <div class="col-md-4 col-lg-4">
  
                  <div class="box">
                    <div class="option_container">
                       <div class="options">
                          <a href="" class="option1"  data-bs-toggle="modal" data-bs-target="#modaldetails{{$coiffant->id}}">
                          Voir plus
                          </a>
                          <a href="" class="option2">
                          Ajouter au panier
                          </a>
                       </div>
                    </div>
                    <div class="img-box">
                      <img src="{{asset("assets/img/produits/".$coiffant->photo_produit)}}" class="card-img-top" alt="...">
                    </div>
                    <div class="detail-box">
                       <h5>
                        {{$coiffant->nom_produit}}
                       </h5>
                       <h6>
                           {{$coiffant->prix}} DT
                       </h6>
                    </div>
                 </div>
  
                </div>

                  <!-- Modal details produits -->
                  <div class="modal fade" id="myModal{{$coiffant->id}}" role="dialog">
                      <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                              <div class="modal-body">
                                  <div class="container mt-5 mb-5">
                                      <div class="row d-flex justify-content-center">
                                          <div class="col-md-10">

                                              <div class="row">
                                                  <div class="col-md-4">
                                                      <div class="images">
                                                          <div class="text-center"> <img class="main-image"  src="{{asset("assets/img/produits/".$coiffant->photo_produit)}}" width="250" /> </div>

                                                      </div>
                                                  </div>
                                                  <div class="col-md-8">
                                                      <div class="product p-4">

                                                          <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">{{$coiffant->marque}}</span>
                                                              <h5 class="text-uppercase">{{$coiffant->nom_produit}}</h5>
                                                              <div class="price d-flex flex-row align-items-center"> <span class="act-price">{{$coiffant->prix}} DT</span>

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
              @endforeach
           </div>
         </div>



         <!-- Pills Beauté -->
         <div class="container tab-pane fade profile-edit pt-3" id="pills-beauté">

          <div class="row">
              @foreach ($beautes as $beaute)

              <div class="col-md-4 col-lg-4">
  
                  <div class="box">
                    <div class="option_container">
                       <div class="options">
                          <a href="" class="option1"  data-bs-toggle="modal" data-bs-target="#modaldetails{{$beaute->id}}">
                          Voir plus
                          </a>
                          <a href="" class="option2">
                          Ajouter au panier
                          </a>
                       </div>
                    </div>
                    <div class="img-box">
                      <img src="{{asset("assets/img/produits/".$beaute->photo_produit)}}" class="card-img-top" alt="...">
                    </div>
                    <div class="detail-box">
                       <h5>
                       {{$beaute->nom_produit}}
                       </h5>
                       <h6>
                         {{$beaute->prix}} DT
                       </h6>
                    </div>
                 </div>
  
                </div>


                  <!-- Modal details produits -->
                  <div class="modal fade" id="myModal{{$beaute->id}}" role="dialog">
                      <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                              <div class="modal-body">
                                  <div class="container mt-5 mb-5">
                                      <div class="row d-flex justify-content-center">
                                          <div class="col-md-10">

                                              <div class="row">
                                                  <div class="col-md-4">
                                                      <div class="images">
                                                          <div class="text-center"> <img class="main-image"  src="{{asset("assets/img/produits/".$beaute->photo_produit)}}" width="250" /> </div>

                                                      </div>
                                                  </div>
                                                  <div class="col-md-8">
                                                      <div class="product p-4">

                                                          <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">{{$beaute->marque}}</span>
                                                              <h5 class="text-uppercase">{{$beaute->nom_produit}}</h5>
                                                              <div class="price d-flex flex-row align-items-center"> <span class="act-price">{{$beaute->prix}} DT</span>

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
              @endforeach
           </div>
         </div>


         <!-- Pills hygiéne --> 
         <div class="container tab-pane fade profile-edit pt-3" id="pills-hygiéne">

          <div class="row">
              @foreach ($Hygienes as $hygiene)

              <div class="col-md-4 col-lg-4">
  
                  <div class="box">
                    <div class="option_container">
                       <div class="options">
                          <a href="" class="option1"  data-bs-toggle="modal" data-bs-target="#modaldetails{{$hygiene->id}}">
                          Voir plus
                          </a>
                          <a href="" class="option2">
                          Ajouter au panier
                          </a>
                       </div>
                    </div>
                    <div class="img-box">
                      <img src="{{asset("assets/img/produits/".$hygiene->photo_produit)}}" class="card-img-top" alt="...">
                    </div>
                    <div class="detail-box">
                       <h5>
                       {{$hygiene->nom_produit}}
                       </h5>
                       <h6>
                         {{$hygiene->prix}} DT
                       </h6>
                    </div>
                 </div>
  
                </div>


                  <!-- Modal details produits -->
                  <div class="modal fade" id="myModal{{$hygiene->id}}" role="dialog">
                      <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                              <div class="modal-body">
                                  <div class="container mt-5 mb-5">
                                      <div class="row d-flex justify-content-center">
                                          <div class="col-md-10">

                                              <div class="row">
                                                  <div class="col-md-4">
                                                      <div class="images">
                                                          <div class="text-center"> <img class="main-image"  src="{{asset("assets/img/produits/".$hygiene->photo_produit)}}" width="250" /> </div>

                                                      </div>
                                                  </div>
                                                  <div class="col-md-8">
                                                      <div class="product p-4">

                                                          <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">{{$hygiene->marque}}</span>
                                                              <h5 class="text-uppercase">{{$hygiene->nom_produit}}</h5>
                                                              <div class="price d-flex flex-row align-items-center"> <span class="act-price">{{$hygiene->prix}} DT</span>

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
              @endforeach
           </div>
         </div>


         <!-- Pills colorations -->
         <div class="container tab-pane fade profile-edit pt-3" id="pills-coloration">


          <div class="row">
              @foreach ($Colorations as $coloration)
                <div class="col-md-4 col-lg-4">
  
                  <div class="box">
                    <div class="option_container">
                       <div class="options">
                          <a href="" class="option1"  data-bs-toggle="modal" data-bs-target="#modaldetails{{$coloration->id}}">
                          Voir plus
                          </a>
                          <a href="" class="option2">
                          Ajouter au panier
                          </a>
                       </div>
                    </div>
                    <div class="img-box">
                      <img src="{{asset("assets/img/produits/".$coloration->photo_produit)}}" class="card-img-top" alt="...">
                    </div>
                    <div class="detail-box">
                       <h5>
                        {{$coloration->nom_produit}}
                       </h5>
                       <h6>
                         {{$coloration->prix}} DT
                       </h6>
                    </div>
                 </div>
  
                </div>
           </div>

             <!-- Modal details produits -->
             <div class="modal fade" id="myModal{{$coloration->id}}" role="dialog">
                 <div class="modal-dialog modal-lg">
                     <div class="modal-content">

                         <div class="modal-body">
                             <div class="container mt-5 mb-5">
                                 <div class="row d-flex justify-content-center">
                                     <div class="col-md-10">

                                         <div class="row">
                                             <div class="col-md-4">
                                                 <div class="images">
                                                     <div class="text-center"> <img class="main-image"  src="{{asset("assets/img/produits/".$coloration->photo_produit)}}" width="250" /> </div>

                                                 </div>
                                             </div>
                                             <div class="col-md-8">
                                                 <div class="product p-4">

                                                     <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">{{$coloration->marque}}</span>
                                                         <h5 class="text-uppercase">{{$coloration->nom_produit}}</h5>
                                                         <div class="price d-flex flex-row align-items-center"> <span class="act-price">{{$coloration->prix}} DT</span>

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
             @endforeach
         </div>
        </div>

        </section>
    </div>

       
    

        <!-- Modal ajout produit -->
        <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Ajouter produit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="row g-3" action="{{route("store-produit")}}" method="post" enctype="multipart/form-data">
@csrf
                  <div class="col-12">
                  
                    <div class="card-body profile-card pt-3 d-flex flex-column align-items-center">
                      <!--<img src="assets/img/profile-img.jpg" alt="Profile" name="photo_produit">
                      <div class="btn-groupy" >
                        <a href="#" class="ADD btn-sm AddRemove" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                        <a href="#" class="REMOVE btn-sm AddRemove" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                      </div>-->
                        <img id="img-uploaded" src="{{asset('assets/img/produits/produittest.jpg')}}" alt="your image"   />

                      <div class="right">


<span class="file-wrapper ">
  <input type="file" name="photo_produit" id="imgInp" class="uploader " accept="image/jpg, image/jpeg, image/png" required/>

</span>
                      </div>

                    </div>
                  
                  </div>


                  <div class="col-12">
                    <label for="inputNanme4" class="form-label">Produit</label>
                    <input type="text" class="form-control" id="inputNanme4" name="nom_produit">
                  </div>
                  <div class="col-12"> 
                    <label for="inputEmail4" class="form-label">Catégories</label>
                    <select class="form-select" aria-label="Default select example" name="categorie">
                      <option selected value="Shampoings">Shampoings</option>
                      <option value="Soins" >Soins</option>
                      <option value="Coiffants">Coiffants</option>
                      <option value="Beauté">Beauté</option>
                      <option value="Hygiéne">Hygiéne</option>
                      <option value="Coloration">Coloration</option>

                    </select>
                  </div>
                  <div class="col-12"> 
                    <label for="inputEmail4" class="form-label">Marque</label>
                    <select class="form-select" aria-label="Default select example" name="nom_marque">
                      <option selected value="Roncey">Roncey</option>
                      <option value="Avene">Avéne</option>
                      
                     
                    </select>
                  </div>
                    <div class="col-12">
                        <label for="inputPassword4" class="form-label">Nombre de stock</label>
                        <input type="number" class="form-control" id="inputNanme4" name="stock">
                    </div>
                    <div class="col-12">
                        <label for="inputPassword4" class="form-label">Prix</label>
                        <input type="number" class="form-control" id="inputNanme4" name="prix">
                    </div>
                  <div class="col-12">
                    <label for="inputPassword4" class="form-label">Description</label>
                    <textarea class="form-control" placeholder="Description du produit" id="floatingTextarea" name="description" style="height: 100px;"></textarea>
                  </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn-submit">Ajouter produit</button>
                    </div>
                  
                </form><!-- Vertical Form -->
  
              </div>

            </div>
          </div>
        </div>
      
<!-- End ajout produit--> 

     
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




  <script>

      /*----------------------------------------
      Upload btn
      ------------------------------------------*/



      $('.file-wrapper input[type=file]').bind('change focus click', SITE.fileInputs);

      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              var tmppath = URL.createObjectURL(event.target.files[0]);

              reader.onload = function (e) {
                  $('#img-uploaded').attr('src', e.target.result);
                  $('input.img-path').val(tmppath);
              }

              reader.readAsDataURL(input.files[0]);
          }
      }

      $(".uploader").change(function(){
          readURL(this);
      });
  </script>

@stop