@extends('layouts.master')
@include('layouts.sidebar-gerent')
@section('title-page')
Dashobard
@stop

@section('active-page')
Dashobard
@stop

@section('content')

<div class="btn-ajout">
    <button type="submit" class="btn my-btn">Ajouter client</button>
  </div>

  <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            
            <th>Nom et prénom</th>
            <th>code client</th>
            <th>Numéro téléphone</th>
            <th>adresse</th>
            <th>Personne référente </th>
            <th>Historique des factures</th>
        </tr>
    </thead>
    <tbody>

        @foreach($prestataires as $prestataire)
        <tr>
             
            <td>{{$prestataire->nom}}</td>
            <td>{{$prestataire->prenom}}</td>
            <td>{{$prestataire->email}}</td>
            <td></td>
            <td><a href="#"><i class="bi bi-menu-button-wide"></i></a></td>
        </tr>
        @endforeach



        
     
     
      
    </tbody>
  
</table>
@stop