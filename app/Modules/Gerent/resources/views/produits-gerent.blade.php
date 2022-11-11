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
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Décoloration </button>
          </li>
      </ul>


      <div class="tab-content pt-2" id="myTabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
          <table>
          @if($categorie=="shampoing")
            @foreach($produit_cat as $produit)
          <tr>
            <td>{{$produit->nom_marque}}
            </td>
            <td>{{$produit->nom_produit}}
            </td>
          </tr>
              @endforeach
          @endif
          </table>
          Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="profile-tab">
          @if($categorie=="soins")

          @foreach($produit_cat as $produit)
            <tr>
              <td>{{$produit->nom_marque}}
              </td>
              <td>{{$produit->nom_produit}}
              </td>
            </tr>
          @endforeach
@endif
          Nesciunt totam et. Consequuntur magnam aliquid eos nulla dolor iure eos quia. Accusantium distinctio omnis et atque fugiat. Itaque doloremque aliquid sint quasi quia distinctio similique. Voluptate nihil recusandae mollitia dolores. Ut laboriosam voluptatum dicta.
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="contact-tab">
          @if($categorie=="Coiffants")

          @foreach($produit_cat as $produit)
            <tr>
              <td>{{$produit->nom_marque}}
              </td>
              <td>{{$produit->nom_produit}}
              </td>
            </tr>
          @endforeach
          @endif
          Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
        </div>
      </div><!-- End Pills Tabs -->

    </div>
  </div>
  @endforeach
@stop