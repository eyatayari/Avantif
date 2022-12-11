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
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#one">Détails  </button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#two">Lignes de facture </button>
                            </li>



                        </ul>
                        <div class="tab-content pt-2">


                            <div class="tab-pane fade show active profile-edit pt-3" id="one">

                                <!-- Profile Edit Form -->
                                <form id="clients">
                                    <div class="row mb-3">
                                        <label for="about" class="col-md-4 col-lg-3 col-form-label">Facture N°</label>
                                        <div class="col-md-8 col-lg-9">
                                            <span> 0000333 </span>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Photos                       <span> Types de fichiers autorisés : png, jpg, jpeg </span>
                                        </label>
                                        <div class="col-md-4 col-lg-4" >
                                            <img id="photos" src="" alt="Profile">
                                            <div class="pt-2">
                                                <a href="#" class=" btnUpload btn-sm" title="Upload new profile image">Photo  avant <i class="bi bi-upload"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4" >
                                            <img src="assets/img/profile-img.jpg" id="photos" alt="Profile">
                                            <div class="pt-2">
                                                <a href="#" class=" btnUpload btn-sm" title="Upload new profile image"> Photo aprés <i class="bi bi-upload"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Date</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input  type="date" class="form-control" id="fullName" value="">
                                        </div>
                                    </div>







                                    <div class="row mb-3">
                                        <label for="Country" class="col-md-4 col-lg-3 col-form-label">Client</label>
                                        <div class="col-md-8 col-lg-9">
                                            <select class="form-select" aria-label="Default select example" name="client">
                                                @foreach($clients as $client)
                                                    <option value="{{$client->id}}">{{$client->name}} </option>
                                                @endforeach


                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Mode de paiement</label>
                                        <div class="col-md-8 col-lg-9">
                                            <select class="form-select" aria-label="Default select example" name="mode_paiement">
                                                <option selected value="Espéces">Espéces</option>
                                                <option value="Virement">Virement</option>
                                                <option value="Chéques">Chéques</option>


                                            </select>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field">
                                            @foreach ($produits as $k => $produit) // or 1 to 6
                                            <tr>
                                                <td>
                                                    <<input type="number" name="item[{{$k}}][qty]" value="0">
                                                    <input type="hidden" name="item[{{$k}}][id]" value="{{$produit->id}}">
                                                </td>
                                                <td>{{ $produit->nom_produit }}</td>
                                                <td>{{ $produit->prix }} €</td>
                                                <td>
                                                    <input type="hidden" name="item[{{$k}}][id]" value="{{$produit->id}}">

                                                </td>

                                                <td>
                                                    <a href="/cart/add/{{$produit->id}}">+</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </table>

                                    <div class="text-center">
                                        <button  id="add" class=" btn btn-info">Add products</button>
                                        <button  class=" btn">Add Prestations</button>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class=" btn-submit">Valider</button>
                                    </div>

                                </form><!-- End Profile Edit Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
              @stop
<script type="text/javascript">
    $(document).ready(function(){
        var postURL = "<?php echo url('facture'); ?>";
        var i=1;

        $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Enter your Product Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('#submit').click(function(){
            $.ajax({
                url:postURL,
                method:"POST",
                data:$('#product_name').serialize(),
                type:'json',
                success:function(data)
                {
                    if(data.error){
                        previewMessage(data.error);
                    }else{
                        i=1;
                        $('.dynamic-added').remove();
                        $('#product_name')[0].reset();
                        $(".print-success-msg").find("ul").html('');
                        $(".print-success-msg").css('display','block');
                        $(".error-message-display").css('display','none');
                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                    }
                }
            });
        });


        function previewMessage (msg) {
            $(".error-message-display").find("ul").html('');
            $(".error-message-display").css('display','block');
            $(".print-success-msg").css('display','none');
            $.each( msg, function( key, value ) {
                $(".error-message-display").find("ul").append('<li>'+value+'</li>');
            });
        }
    });
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
