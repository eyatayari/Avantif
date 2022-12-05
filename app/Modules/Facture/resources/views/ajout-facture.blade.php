<!doctype html>
@extends('layouts.master')
@include('layouts.sidebar-prestataire')

@section('title-page')
    Ajouter facture
@stop

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="index.html">Dashobard</a></li>
    <li class="breadcrumb-item">Factures</li>
    <li class="breadcrumb-item active">Ajouter facture</li>
@stop

@section('content')
    <section class="section profile">
        <div class="row">


            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">


                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#one">Détails
                                </button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#two">Lignes de facture
                                </button>
                            </li>


                        </ul>
                        <div class="tab-content pt-2">


                            <!-- Profile Edit Form -->
                            <form id="clients" method="post" action="{{route('facture.store')}}">
                                @csrf
                                <div class="tab-pane fade show active profile-edit pt-3" id="one">
                                    <div class="row mb-3">
                                        <label for="about" class="col-md-4 col-lg-3 col-form-label">Facture N°</label>
                                        <div class="col-md-8 col-lg-9">
                                            <span> 000333 </span>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Photos <span> Types de fichiers autorisés : png, jpg, jpeg </span>
                                        </label>
                                        <div class="col-md-4 col-lg-4">
                                            <img id="photos" src="" alt="Profile">
                                            <div class="pt-2">
                                                <a href="#" class=" btnUpload btn-sm" title="Upload new profile image">Photo
                                                    avant <i class="bi bi-upload"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4">
                                            <img src="assets/img/profile-img.jpg" id="photos" alt="Profile">
                                            <div class="pt-2">
                                                <a href="#" class=" btnUpload btn-sm" title="Upload new profile image">
                                                    Photo aprés <i class="bi bi-upload"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Date</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input type="date" class="form-control" id="fullName" name="DateFacture"
                                                   value="">
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="Country" class="col-md-4 col-lg-3 col-form-label">Client</label>
                                        <div class="col-md-8 col-lg-9">
                                            <select class="form-select" aria-label="Default select example"
                                                    name="client">
                                                @foreach($clients as $client)
                                                    <option value="{{$client->id}}">{{$client->name}} </option>
                                                @endforeach


                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Mode de
                                            paiement</label>
                                        <div class="col-md-8 col-lg-9">
                                            <select class="form-select" aria-label="Default select example"
                                                    name="mode_paiement">
                                                <option selected value="Espéces">Espéces</option>
                                                <option value="Virement">Virement</option>
                                                <option value="Chéques">Chéques</option>


                                            </select>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class=" btn-submit">Valider</button>
                                    </div>
                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="two">

                                    <article>
                                        <h1>Recipient</h1>
                                        <table class="meta">
                                            <tr>
                                                <th><span>Facture #</span></th>
                                                <td><span contenteditable></span></td>
                                            </tr>
                                            <tr>
                                                <th><span>Date</span></th>
                                                <td><span contenteditable></span></td>
                                            </tr>
                                            <tr>
                                                <th><span>Montant dû</span></th>
                                                <td><span id="prefix" contenteditable>€</span><span></span></td>
                                            </tr>
                                        </table>

                                        <table class="table table-bordered" id="prestations">
                                            <thead>
                                            <tr>
                                                <th>Prestataion</th>
                                                <th>Quantité</th>
                                                <th>Prix HT</th>
                                                <th>
                                                    <button type="button" id="addBtn">+<i
                                                                class="fas fa-plus"></i></button>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>


                                            </tbody>
                                        </table>
                                        <table class="table table-bordered" id="produits">
                                            <thead>
                                            <tr>
                                                <th>Produits</th>
                                                <th>Quantité</th>

                                                <th>
                                                    <button type="button" id="addBtnProduit">+<i
                                                                class="fas fa-plus"></i></button>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>


                                            </tbody>
                                        </table>

                                        <!--   <table class="balance">
                                               <tr>
                                                   <th><span>Montant total HT</span></th>
                                                   <td><span data-prefix>€</span><span>0.00</span></td>
                                               </tr>
                                               <tr>
                                                   <th><span>Montant payé</span></th>
                                                   <td><span data-prefix>€</span><span contenteditable>0.00</span></td>
                                               </tr>
                                               <tr>
                                                   <th><span>Total HT</span></th>
                                                   <td><span data-prefix>€</span><span>0.00</span></td>
                                               </tr>
                                           </table>-->
                                    </article>

                                </div>

                            </form><!-- End Profile Edit Form -->





                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@stop
<link href="{{asset('assets/css/style-facture.css')}}" rel="stylesheet" type="text/css">
<script>

</script>
<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity=
      "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous">

<script src=
        "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script src=
        "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
</script>
<script src=
        "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
</script>
<script>
    $.ajax({
        type: 'get',
        url: '/getPrestations',
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        data: {},
        success: function (res) {
            console.log(res);
            var resultData = res.data;
            console.log(res);
            var html = '';

            //console.log(row.prestation_title);
            html += '<tr>' + '<td>' +

                '<div class="form-group col-md-4"> ' +
                '<select id="source" name="prestations[]" class="form-control" required>';
            $.each(res, function (index, row) {
                console.log(row.id);
                html += '<option value="' + row.id + '">' + row.prestation_title + '</option>';
            });
            html += '</select>' +
                '</div> ' + '</td><td>' +
                '<div class="form-group col-md-4"> ' +
                '<input type="number"  name="quantitePrest[]" id="remove" >' +
                '</div> ' + '</td><td>' +
                ' <div class="form-group col-md-4"> ' +
                '<input type="button" class="btn btn-danger" name="remove" id="remove" value="-"> ' +
                '</div> </td></tr> ';


            $("#addBtn").click(function () {
                /* var prestations = $(this).attr('data-content');
                 console.log(prestations);
                 if (x <= max) {*/
                $("#prestations").append(html);
                //x++;
            });

        }
    });
</script>
<script>
    $.ajax({
        type: 'get',
        url: '/getProduits',
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        data: {},
        success: function (res) {
            console.log(res);
            var resultData = res.data;
            console.log(res);
            var html = '';

            //console.log(row.prestation_title);
            html += '<tr>' + '<td>' +

                '<div class="form-group col-md-4"> ' +
                '<select id="source" name="produits[]" class="form-control" required>';
            $.each(res, function (index, row) {
                console.log(row.id);
                html += '<option value="' + row.id + '">' + row.nom_produit + '</option>';
            });
            html += '</select>' +
                '</div> ' + '</td><td>' +
                '<div class="form-group col-md-4"> ' +
                '<input type="number"  name="quantiteProd[]" id="remove" >' +
                '</div> ' + '</td><td>' +
                ' <div class="form-group col-md-4"> ' +
                '<input type="button" class="btn btn-danger" name="remove" id="remove" value="-"> ' +
                '</div> </td></tr> ';


            $("#addBtnProduit").click(function () {
                /* var prestations = $(this).attr('data-content');
                 console.log(prestations);
                 if (x <= max) {*/
                $("#produits").append(html);
                //x++;
            });

        }
    });
</script>
<script>

    /* $(document).on('load',function () {
         //recuperer data prestations


         var html = '<tr>' + '<td>' +

             '<div class="form-group col-md-4"> ' +
             '<select id="source" name="prestations[]" class="form-control" required>'
             + '<option value="eya">eya</option>' +
             +'<option value="eya mara okhra">eya mara okhra</option>' +
             +'</select>' +
             '</div> ' + '</td><td>' +
             '<div class="form-group col-md-4"> ' +
             '<input type="number"  name="quantite" id="remove" >' +
             '</div> ' + '</td><td>' +
             ' <div class="form-group col-md-4"> ' +
             '<input type="button" class="btn btn-danger" name="remove" id="remove" value="-"> ' +
             '</div> </td></tr> ';
         var max = 5;
         var x = 1;

         $("#addBtn").click(function () {
             var prestations = $(this).attr('data-content');
 console.log(prestations);
             if (x <= max) {
                 $("#prestations").append(html);
                 x++;
             }
         });
         console.log(html);
     });*/
</script>
