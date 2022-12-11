<!doctype html>
<html>
<head>

</head>
<body>

    <div class="row">


        <div class="col-xl-12">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                 <h2 style="text-align: center">Facture de service</h2>
                    <div class="tab-content pt-2">


                        <div class="tab-pane fade show active profile-edit pt-3" id="one">

                            <!-- Profile Edit Form -->
                            <form id="clients">
                                <div class="row mb-3">
                                    <p class="col-md-4 col-lg-3 col-form-label">Facture N°:

                                        <span> {{$numFacture}} </span>
                                    </p>
                                </div>
                                <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Photos
                                    </label>
                                    <div class="col-md-4 col-lg-4">
                                        <img id="photos" src="" alt="Profile">
                                        <div class="pt-2">

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <img src="assets/img/profile-img.jpg" id="photos" alt="Profile">
                                        <div class="pt-2">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <p for="fullName" class="col-md-4 col-lg-3 col-form-label">Date :
                                        <span>{{$DateFacture}}</span>
                                    </p>
                                </div>
                        </div>


                        <div class="row mb-3">
                            <p class="col-md-4 col-lg-3 col-form-label">Client :
                                <span>{{$client}}</span>
                            </p>

                        </div>

                        <div class="row mb-3">
                            <p class="col-md-4 col-lg-3 col-form-label">Mode de paiement :
                                <span>{{$mode_paiement}}</span>
                            </p>

                        </div>
                        <div class="table-responsive">
                            <h3 style="text-align: center">Prestations :</h3>
                            <table class="table table-bordered" style="border: 1px;width: 100%;text-align: center">

                                <tr>
                                    <td>
                                        Prestation
                                    </td>
                                    <td>Quantité</td>
                                    <td> Prix Unitaire</td>
                                </tr>
                                @foreach($prestations as $prestation)
                                    <tr>

                                        <td>
                                            {{$prestation->prestation_title}}

                                        </td>

                                        <td>
                                            {{$nbr}}
                                        </td>
                                        <td>
                                            {{$prestation->price}}
                                        </td>
                                    </tr>
                                @endforeach

                            </table>


                            <!-- End Profile Edit Form -->
                        </div>

                            <h3 style="text-align: center">Produits :</h3>
                            <table class="table table-bordered" style="border: 1px;width: 100%; text-align: center">

                                <tr>
                                    <td>
                                        Produit
                                    </td>
                                    <td>Quantité</td>
                                    <td> Prix Unitaire</td>
                                </tr>
                                @foreach($prestations as $prestation)
                                <tr>

                                    <td>
                                        {{$prestation->prestation_title}}

                                    </td>

                                    <td>
                                        {{$nbr}}
                                    </td>
                                    <td>
                                        {{$prestation->price}}
                                    </td>
                                </tr>
@endforeach
                            </table>


                            <!-- End Profile Edit Form -->

                        <h5 style="text-align: center; font-size: large">Total facture : {{$total}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
