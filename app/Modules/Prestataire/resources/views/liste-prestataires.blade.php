@extends('gerant.layouts.master')
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
        <tr>
             
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td><a href="#"><i class="bi bi-menu-button-wide"></i></a></td>
        </tr>
        <tr>
             
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td><a href="#"><i class="bi bi-menu-button-wide"></i></a></td>
        </tr>
        <tr>
             
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td><a href="#"><i class="bi bi-menu-button-wide"></i></a></td>
        </tr>
        <tr>
             
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td><a href="#"><i class="bi bi-menu-button-wide"></i></a></td>
        </tr>
        <tr>
             
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td><a href="#"><i class="bi bi-menu-button-wide"></i></a></td>
        </tr>
  
       
        
     
     
      
    </tbody>
  
</table>
@stop