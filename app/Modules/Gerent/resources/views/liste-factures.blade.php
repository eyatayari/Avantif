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
    <button type="submit" class="btn add-btn">+</button>
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
        <tr>
             
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td><span class="badge rounded-pill bg-danger">non payé</span></td>
             <td id="actionBox">
             
                <a id="actionBtn" class=" btnDelete" href="#"><i class="bi bi-trash3"></i></a>
                <a id="actionBtn"  class="btnEdit" href="#"><i class="bi bi-filetype-pdf"></i></a>
            </td> 

            
        </tr>
        <tr>
             
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td><span class="badge rounded-pill bg-success">payé</span></td>
             <td id="actionBox">
             
                <a id="actionBtn" class=" btnDelete" href="#"><i class="bi bi-trash3"></i></a>
                <a id="actionBtn"  class="btnEdit" href="#"><i class="bi bi-filetype-pdf"></i></a>
            </td> 
        </tr>
        <tr>
             
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td><span class="badge rounded-pill bg-success">payé</span></td>
             <td id="actionBox">
             
                <a id="actionBtn" class=" btnDelete" href="#"><i class="bi bi-trash3"></i></a>
                <a id="actionBtn"  class="btnEdit" href="#"><i class="bi bi-filetype-pdf"></i></a>
            </td> 
        </tr>
        <tr>
             
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td> 
            <td>61</td>
            <td>2011/04/25</td>
            <td><span class="badge rounded-pill bg-success">payé</span></td>
             <td id="actionBox">         
                <a id="actionBtn" class=" btnDelete" href="#"><i class="bi bi-trash3"></i></a>
                <a id="actionBtn"  class="btnEdit" href="#"><i class="bi bi-filetype-pdf"></i></a>
                
               
            </td> 
        </tr>
       
  
       
        
     
     
      
    </tbody>
  
</table>

@stop