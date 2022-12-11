@extends('layouts.master')
@include('layouts.sidebar-gerent')
@section('title-page')
Liste des factures 
@stop

@section('prev-page')
Factures
@stop 
@section('active-page')
Liste des Factures
@stop

@section('content')
<div class="btn-ajout">
    <form action="{{route("add-facture")}}" >
    <button type="submit" class="btn add-btn">+</button>
    </form>
  </div>

  <table id="example" class="table  table-bordered" style="width:100%">
    <thead>
        <tr >
            
            <th>Num facture</th>
            <th>Code client</th>
            <th>Code prestataire</th>
            <th>Total TTC</th>
            <th>Date </th>
            <th>Etat paiment</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($factures as $facture)
        <tr>
             



            <td>{{$facture->id}}</td>
            <td>{{$facture->client->id}}</td>
            <td></td>
            <td>{{$facture->totalFacture}}</td>
            <td>{{$facture->DateFacture}}</td>
            <td>{{$facture->mode_paiement}}</td>

            <td id="actionBox">

                <a id="actionBtn" class=" btnDelete" href="{{route("delete-facture",['numFacture'=>$facture->id])}}"><i class="bi bi-trash3"></i></a>
                <a id="actionBtn"  class="btnEdit" href="{{route("imprimer",['numFacture'=>$facture->id])}}"><i class="bi bi-printer"></i></a>
            </td>


        </tr>

    @endforeach



        </tbody>

    </table>



@stop