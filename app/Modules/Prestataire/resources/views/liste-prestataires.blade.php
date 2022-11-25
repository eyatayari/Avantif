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
        <tr>
             
            <td>0005</td>
            <td>samar</td>
            <td>Edinburgh</td>
            <td>61</td>
            
            <td><span class="badge rounded-pill bg-danger">hors service</span></td>
             <td id="actionBox">
             
                <a id="actionBtn" class=" btnDelete" href="#"><i class="bi bi-trash3"></i></a>
                <a id="actionBtn"  class="btnEdit" href="#"><i class="bi bi-pen"></i></a>
            </td> 

            
        </tr>
        <tr>
             
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            
            <td><span class="badge rounded-pill bg-success">Actif</span></td>
             <td id="actionBox">
             
                <a id="actionBtn" class=" btnDelete" href="#"><i class="bi bi-trash3"></i></a>
                <a id="actionBtn"  class="btnEdit" href="#"><i class="bi bi-pen"></i></a>
            </td> 
        </tr>
        <tr>
             
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            
            <td><span class="badge rounded-pill bg-success">Actif</span></td>
             <td id="actionBox">
             
                <a id="actionBtn" class=" btnDelete" href="#"><i class="bi bi-trash3"></i></a>
                <a id="actionBtn"  class="btnEdit" href="#"><i class="bi bi-pen"></i></a>
            </td> 
        </tr>
        <tr>
             
            <td>Tiger Nixon</td>
            <td>System Architect</td>


            <td>Edinburgh</td> 
            <td>ddd</td>
            <td>61</td>
            
            <td><span class="badge rounded-pill bg-success">Actif</span></td>
             <td id="actionBox">         
                <a id="actionBtn" class=" btnDelete" href="#"><i class="bi bi-trash3"></i></a>
                <a id="actionBtn"  class="btnEdit" href="#"><i class="bi bi-pen"></i></a>
            </td> 
        </tr>
       
  
       
        
     
     
      
    </tbody>
  
</table>
@stop