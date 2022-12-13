@extends('layouts.master')
@include('layouts.sidebar-gerent')
@section('title-page')
Liste des prestataires
@stop

@section('active-page')
Dashobard
@stop

@section('content')

    <div class="btn-ajout">
    <button type="submit" class="btn add-btn">+</button>
  </div>

  <table id="example" class="table  table-bordered" style="width:100%">
    <thead>
        <tr >
            
            <th>Code prestataire</th>
            <th>Nom et prénom</th>
            <th>Téléphone</th>
            <th>Email</th>
            
            <th>Statut</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($prestataires as $prestataire)
        <tr>
             
            <td>{{$prestataire->id}}</td>
            <td>{{$prestataire->nom}} {{$prestataire->prenom}}</td>
            <td>{{$prestataire->telephone}}</td>
            <td>{{$prestataire->email}}</td>
            <td>{{$prestataire->adresse}} , {{$prestataire->pays}}</td>

            @if($prestataire->statut)
            <td><span class="badge rounded-pill bg-danger">en service</span></td>
            @else
                <td><span class="badge rounded-pill bg-danger">Hors service</span></td>
                @endif
             <td id="actionBox">
             
                <a id="actionBtn" class=" btnDelete" href="{{route("DeletePrestataire")}}"><i class="bi bi-trash3"></i></a>
                <a id="actionBtn"  class="btnEdit" href="{{route('edit-prestataire',['id'=>$prestataire->id])}}"><i class="bi bi-pen"></i></a>
            </td> 

            
        </tr>
        @endforeach


       
  
       
        
     
     
      
    </tbody>
  
</table>
@stop